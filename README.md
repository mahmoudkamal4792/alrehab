# Build steps:
- `npm install`
- Add following snippet to `AppServiceProvider.php` in `function boot()`:
    ```
    Blade::directive('svg', function ($file) {
        $path = resource_path() . '/images/shapes/' . trim($file, "' ()") . '.svg';

        // Create the dom document as per the other answers
        $svg = new \DOMDocument();
        $svg->load($path);
        $svg->documentElement->setAttribute("class", '');
        $output = $svg->saveXML($svg->documentElement);

        return $output;
    });
    ```
- Change src_path & public_path constants
- `npm run build`