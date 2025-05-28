<?php
class View {
    public static function show($viewName, $data = null) {
        $basePath = __DIR__ . '/'; // Ruta absoluta del directorio actual (Views/)
        $viewPath = $basePath . $viewName . '.php';
        $headerPath = $basePath . 'header.php';
        $footerPath = $basePath . 'footer.php';

        if (file_exists($viewPath)) {
            if (file_exists($headerPath)) include_once($headerPath);
            include($viewPath);
            if (file_exists($footerPath)) include_once($footerPath);
        } else {
            echo "<p style='color:red;'>❌ La vista '$viewName.php' no se encuentra en la carpeta Views.</p>";
        }
    }
}
