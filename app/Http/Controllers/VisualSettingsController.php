<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visual_setting;

class VisualSettingsController extends Controller
{
    public function upload_settings(Request $request)
    {
        $settings = Visual_setting::first();

        /* $settings->theme = $request->theme; */
        if ($request->theme != null) {
            $settings->theme = $request->theme;
        }
        if ($request->font_option_titles != null) {
            $settings->font_option_titles = $request->font_option_titles;
        }
        if ($request->font_option_content != null) {
            $settings->font_option_content = $request->font_option_content;
        }
        if ($request->syte_width_option != null) {
            $settings->syte_width_option = $request->syte_width_option;
        }
        if ($request->syte_color != null) {
            $settings->syte_color = $request->syte_color;
            $settings->syte_color_text = $request->syte_color_text;

        }

        $settings->save();

        return response()->json([
            'success' => true
        ]);
    }
}
