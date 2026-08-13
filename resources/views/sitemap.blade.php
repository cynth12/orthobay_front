{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">

    @foreach($urls as $url)

        <url>

            <loc>{{ $url['loc'] }}</loc>

            <xhtml:link
                rel="alternate"
                hreflang="es-MX"
                href="https://orthobayvallarta.com/es"
            />

            <xhtml:link
                rel="alternate"
                hreflang="en-US"
                href="https://orthobayvallarta.com/en"
            />

            <xhtml:link
                rel="alternate"
                hreflang="x-default"
                href="https://orthobayvallarta.com/en"
            />

            <changefreq>{{ $url['changefreq'] }}</changefreq>

            <priority>{{ $url['priority'] }}</priority>

        </url>

    @endforeach

</urlset>