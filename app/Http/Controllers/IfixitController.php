<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Log;
use League\CommonMark\CommonMarkConverter;

class IfixitController extends Controller
{
    public function importAndTranslateGuides()
    {
        $guides = Guide::all(); // Obtiene todos los tutoriales a traducir

        $tr = new GoogleTranslate('ca'); // Instancia el traductor

        foreach ($guides as $guide) {
            // Traduce los textos y añade pausas de 3 segs  para evitar bloqueos
            $translatedTitle = $tr->translate($guide->title);
            sleep(3);
            $translatedSummary = $tr->translate($guide->summary);
            sleep(3);
            $translatedIntroduction = $tr->translate($guide->introduction_raw);
            sleep(3);
            $translatedConclusion = $tr->translate($guide->conclusion_raw);
            sleep(3);

            // Guarda las traducciones en los campos correspondientes
            $guide->title = $translatedTitle;
            $guide->summary = $translatedSummary;
            $guide->introduction_raw = $translatedIntroduction;
            $guide->conclusion_raw = $translatedConclusion;

            // Asegúrate de regenerar la versión renderizada si es necesario
            $guide->introduction_rendered = $this->renderMarkdown($translatedIntroduction);
            $guide->conclusion_rendered = $this->renderMarkdown($translatedConclusion);

            // Guarda los cambios
            $guide->save();
        }

        return redirect()->route('guides.index')->with('success', 'Tutorials imported and translated to Catalan!');
    }

    // 💡 Mueve el método aquí dentro de la clase
    private function renderMarkdown($text)
    {
        $converter = new CommonMarkConverter();
        return $converter->convert($text)->getContent();
    }
}
