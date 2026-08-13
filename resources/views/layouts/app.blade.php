<!DOCTYPE html>

<html lang="{{ app()->getLocale() == 'es' ? 'es-MX' : 'en-US' }}">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow">


    {{-- =========================================================
        SEO SEGÚN IDIOMA
    ========================================================== --}}

    @if(app()->getLocale() == 'es')

        @php
            $seoTitle = 'Cirujano Ortopedista en Puerto Vallarta | Dr. Daniel Ponce';

            $seoDescription = 'Dr. Daniel Ponce Covarrubias, cirujano ortopedista certificado en Puerto Vallarta y Nuevo Nayarit. Cirugía de rodilla, cadera y hombro, prótesis articulares y artroscopia.';

            $seoUrl = 'https://orthobayvallarta.com/es';

            $ogLocale = 'es_MX';
        @endphp

    @else

        @php
            $seoTitle = 'Orthopedic Surgeon in Puerto Vallarta | Dr. Daniel Ponce';

            $seoDescription = 'Dr. Daniel Ponce Covarrubias is a certified orthopedic surgeon serving Puerto Vallarta and Nuevo Nayarit. Knee, hip and shoulder surgery, joint replacement and arthroscopy.';

            $seoUrl = 'https://orthobayvallarta.com/en';

            $ogLocale = 'en_US';
        @endphp

    @endif


    <title>{{ $seoTitle }}</title>

    <meta name="description" content="{{ $seoDescription }}">

    <meta name="author" content="Dr. Daniel Ponce Covarrubias">



    {{-- =========================================================
        CANONICAL
    ========================================================== --}}

    <link rel="canonical" href="{{ $seoUrl }}">



    {{-- =========================================================
        HREFLANG
    ========================================================== --}}

    <link
        rel="alternate"
        hreflang="es-MX"
        href="https://orthobayvallarta.com/es"
    >

    <link
        rel="alternate"
        hreflang="en-US"
        href="https://orthobayvallarta.com/en"
    >

    <link
        rel="alternate"
        hreflang="x-default"
        href="https://orthobayvallarta.com/en"
    >



    {{-- =========================================================
        FAVICON
    ========================================================== --}}

    <link
        rel="icon"
        type="image/png"
        href="{{ asset('assets/images/favicon_1.png') }}"
    >



    {{-- =========================================================
        FONT AWESOME
    ========================================================== --}}

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    >



    {{-- =========================================================
        OPEN GRAPH
        Facebook, WhatsApp, LinkedIn, etc.
    ========================================================== --}}

    <meta property="og:type" content="website">

    <meta property="og:site_name" content="Orthobay Vallarta">

    <meta property="og:locale" content="{{ $ogLocale }}">

    <meta property="og:url" content="{{ $seoUrl }}">

    <meta property="og:title" content="{{ $seoTitle }}">

    <meta property="og:description" content="{{ $seoDescription }}">


    {{-- TEMPORAL:
        usamos una imagen que sabemos que existe.
        Después crearemos una imagen Open Graph de 1200 x 630 px.
    --}}

    <meta
        property="og:image"
        content="{{ asset('assets/images/doctor_1.png') }}"
    >

    <meta
        property="og:image:alt"
        content="Dr. Daniel Ponce Covarrubias - Orthobay Vallarta"
    >



    {{-- =========================================================
        TWITTER / X CARD
    ========================================================== --}}

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="{{ $seoTitle }}">

    <meta name="twitter:description" content="{{ $seoDescription }}">

    <meta
        name="twitter:image"
        content="{{ asset('assets/images/doctor_1.png') }}"
    >



    {{-- =========================================================
        DATOS ESTRUCTURADOS
        schema.org
    ========================================================== --}}

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",

        "@graph": [

            {
                "@type": "Physician",

                "@id": "https://orthobayvallarta.com/#doctor",

                "name": "Dr. Daniel Ponce Covarrubias",

                "url": "https://orthobayvallarta.com",

                "image": "{{ asset('assets/images/doctor_1.png') }}",

                "description": "{{ app()->getLocale() == 'es'
                    ? 'Cirujano ortopedista certificado especializado en cirugía de rodilla, cadera, hombro, reemplazo articular y artroscopia.'
                    : 'Certified orthopedic surgeon specializing in knee, hip and shoulder surgery, joint replacement and arthroscopy.'
                }}",

                "medicalSpecialty": "Orthopedic",

                "telephone": "+52 322 421 8769",

                "email": "orthobay.drponce@gmail.com",

                "address": {

                    "@type": "PostalAddress",

                    "streetAddress": "Núcleo Médico Joya, Office #02, 55 Paseo de los Cocoteros Av.",

                    "addressLocality": "Nuevo Nayarit",

                    "addressRegion": "Nayarit",

                    "addressCountry": "MX"

                },

                "hasCredential": [

                    {
                        "@type": "EducationalOccupationalCredential",

                        "name": "Cédula Profesional 9390291",

                        "credentialCategory": "Professional medical license"
                    },

                    {
                        "@type": "EducationalOccupationalCredential",

                        "name": "Cédula de Especialidad 11578894",

                        "credentialCategory": "Orthopedic specialist license"
                    },

                    {
                        "@type": "EducationalOccupationalCredential",

                        "name": "Certificación Consejo Mexicano de Ortopedia y Traumatología 18/4860/24",

                        "credentialCategory": "Board certification"
                    }

                ],

                "sameAs": [

                    "https://www.facebook.com/share/1AFnvTu7wm/?mibextid=wwXIfr",

                    "https://www.instagram.com/orthobay_drdanielponce/profilecard/?igsh=a3RtcHE3OHgzMW8y",

                    "https://www.youtube.com/shorts/uMhoaKaF1Z8"

                ]

            },


            {
                "@type": "MedicalClinic",

                "@id": "https://orthobayvallarta.com/#clinic",

                "name": "Orthobay Vallarta",

                "url": "https://orthobayvallarta.com",

                "telephone": "+52 322 421 8769",
                "email": "orthobay.drponce@gmail.com",

                "medicalSpecialty": "Orthopedic",

                "address": {

                    "@type": "PostalAddress",

                    "streetAddress": "Núcleo Médico Joya, Office #02, 55 Paseo de los Cocoteros Av.",

                    "addressLocality": "Nuevo Nayarit",

                    "addressRegion": "Nayarit",

                    "addressCountry": "MX"

                },

                "employee": {
                    "@id": "https://orthobayvallarta.com/#doctor"
                },

                "availableService": [

                    {
                        "@type": "MedicalProcedure",

                        "name": "{{ app()->getLocale() == 'es'
                            ? 'Prótesis de rodilla'
                            : 'Knee replacement surgery'
                        }}"
                    },

                    {
                        "@type": "MedicalProcedure",

                        "name": "{{ app()->getLocale() == 'es'
                            ? 'Artroscopia de rodilla'
                            : 'Knee arthroscopy'
                        }}"
                    },

                    {
                        "@type": "MedicalProcedure",

                        "name": "{{ app()->getLocale() == 'es'
                            ? 'Prótesis de cadera'
                            : 'Hip replacement surgery'
                        }}"
                    },

                    {
                        "@type": "MedicalProcedure",

                        "name": "{{ app()->getLocale() == 'es'
                            ? 'Prótesis de hombro'
                            : 'Shoulder replacement surgery'
                        }}"
                    },

                    {
                        "@type": "MedicalProcedure",

                        "name": "{{ app()->getLocale() == 'es'
                            ? 'Artroscopia de hombro'
                            : 'Shoulder arthroscopy'
                        }}"
                    }

                ]

            }

        ]

    }
    </script>



    {{-- =========================================================
        CSS DEL SITIO
    ========================================================== --}}

    @include('layouts.commonCSS')

</head>


<body>


    <div>

        @include('layouts.navbar')

        @yield('content')

    </div>



    {{-- =========================================================
        FOOTER SEGÚN IDIOMA
    ========================================================== --}}

    @if(app()->getLocale() == 'es')

        @include('es.footer')

    @else

        @include('en.footer')

    @endif



    @include('layouts.commonJS')



    {{-- =========================================================
        WHATSAPP
    ========================================================== --}}

    <a
        href="https://wa.me/5213222726803"
        target="_blank"
        rel="noopener noreferrer"
        class="whatsapp-float"
        title="{{ app()->getLocale() == 'es'
            ? 'Envíanos un mensaje por WhatsApp'
            : 'Send us a WhatsApp message'
        }}"
        aria-label="{{ app()->getLocale() == 'es'
            ? 'Enviar mensaje por WhatsApp'
            : 'Send WhatsApp message'
        }}"
    >

        <i class="fab fa-whatsapp"></i>

    </a>



    <script>

        document.addEventListener("DOMContentLoaded", function() {

            const toggleBtn = document.getElementById("menu-toggle");

            const menu = document.querySelector(".mobile-menu .smartdev_menu");


            if (toggleBtn && menu) {

                toggleBtn.addEventListener("click", function() {

                    menu.classList.toggle("active");

                });

            }


            if (
                typeof jQuery !== 'undefined' &&
                typeof $.fn.scrollToFixed === 'function'
            ) {

                $('.scroll_fixed').scrollToFixed({

                    preFixed: function() {

                        $(this).addClass('prefix');

                    },

                    postFixed: function() {

                        $(this)
                            .addClass('postfix')
                            .removeClass('prefix');

                    }

                });

            }

        });

    </script>


</body>

</html>