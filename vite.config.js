import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/apiCount.js",
                "resources/js/apiCat.js"
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
