<?php

// header


// index
$home = [
    "title" => "Gestiona tu negocio con <span class='text-blue-600'>Negox</span> de manera fácil y eficiente",
    "description" => "Negox El control total de tu negocio o emprendimiento en la palma de tu mano, optimizando cada recurso.",
    "screenshot" => "/assets/hero.png",
];

// common
$common = [
    'appStoreUrl' => "https://apps.apple.com/us/app/subfox/id6754495902",
    'googlePlayUrl' => "https://play.google.com/store/apps/details?id=com.app.app", // could be null
    'appName' => "Negox App",
    'appVersion' => "1.0.0",
    'appTitle' => "El Salvador",
    'appDescription' => "Negox El control total de tu negocio o emprendimiento en la palma de tu mano, optimizando cada recurso.",
    'appRatingAppStore' => [
        'totalReviews' => 10,
        'rating' => 4.5,
    ],
    'appRatingGooglePlay' => [
        'totalReviews' => 10,
        'rating' => 4.5,
    ], // could be null
    'appIcon' => "/assets/app_icon.png",
    'supportEmail' => "centrodigitalsv@gmail.com",
    'screenshotRoundedCorners' => true, // Set to false for sharp corners
];


// features with screenshots
$featuresScreenshots = [
    "title" => "Funciones potentes para mejorar tu experiencia.",
    "description" => "Descubre las herramientas que te facilitarán la gestión de tu negocio.",
    "featuresList" => [
        [
            "title" => "Inventario Personalizado",
            "description" => "Añada y gestione fácilmente productos o servicios personalizados adaptados a sus necesidades.",
            "image" => "/assets/feature_services.png",
        ],
        [
            "title" => "Orden de las finanzas",
            "description" => "Realiza un seguimiento de las finanzas de tu negocio.",
            "image" => "/assets/feature_payment_date.png",
        ],
        [
            "title" => "Recordatorios de pago",
            "description" => "No vuelvas a perderte un pago gracias a los recordatorios puntuales.",
            "image" => "/assets/feature_darkmode.png",
        ],
    ]
];


$featuresIcons = [
    "title" => "Gestión total de tu negocio",
    "description" => "Descubre una amplia gama de funciones diseñadas para mejorar tu experiencia de gestión de negocio.",
    "featuresList" => [
        [
            "title" => "Acceso sin conexión",
            "description" => "Accede a Negox incluso cuando no tengas conexión a internet.",
            "icon" => "cloud_off",
        ],
        [
            "title" => "Material 3 con la sensación de iOS",
            "description" => "Disfruta de una experiencia impecable con el diseño Material 3 y la estética de iOS.",
            "icon" => "phone_iphone",
        ],
        [
            "title" => "Recordatorios de pago",
            "description" => "No vuelvas a perderte un pago gracias a los recordatorios puntuales.",
            "icon" => "notifications_active",
        ],
        [
            "title" => "Widgets",
            "description" => "Agrega widgets a tu pantalla de inicio para un acceso rápido.",
            "icon" => "widgets",
        ],
        [
            "title" => "Inventario personalizado",
            "description" => "Adapte la gestión de inventario a sus necesidades.",
            "icon" => "build",
        ],
        [
            "title" => "Categorias",
            "description" => "Organiza tu inventario por categorías.",
            "icon" => "category",
        ],
        [
            "title" => "Métodos de pago",
            "description" => "Gestiona múltiples métodos de pago con facilidad",
            "icon" => "credit_card",
        ],
        [
            "title" => "Gestiona los clientes Fiados",
            "description" => "Lleva un registro de tus clientes a los cuales te deben dinero (Fiados).",
            "icon" => "hourglass_empty",
        ],
    ]
];

$ratings = [
    "title" => "Lo que dicen nuestros usuarios",
    "description" => "Únete a miles de usuarios satisfechos que han tomado el control de sus sus negocios.",
    "ratingsList" => [
        [
            "title" => "Lesly Leonor Lozano Cueva",
            "description" => "Probé otra aplicación antes, pero este parece mucho más fácil de usar y tiene una interfaz de usuario mejor... ¡Gracias al desarrollador! 👌",
            "rating" => 5,
            "image" => null,
        ],
        [
            "title" => "Felix Mendez",
            "description" => "Muy buena aplicación, me encanta la interfaz y lo simplificada que esta!",
            "rating" => 5,
            "image" => null,
        ],
        [
            "title" => "Manuel Garcia",
            "description" => "De Verdad la recomiendo si están empezando a emprender, es una aplicación muy sencilla de usar.",
            "rating" => 4,
            "image" => null,
        ],
        [
            "title" => "Maria Rodriguez",
            "description" => "Un orgullo para Usulutan, muy buena aplicación, me encanta la interfaz y lo simplificada que esta!",
            "rating" => 5,
            "image" => null,
        ],
    ]
];

$bottomCta = [
    "title" => "Instalar Aplicación",
    "description" => "Negox El control total de tu negocio o emprendimiento en la palma de tu mano, optimizando cada recurso.",
];


// footer
$footer = [
    'description' => "Negox El control total de tu negocio o emprendimiento en la palma de tu mano, optimizando cada recurso.",
    'navigation' => [
        [
            "title" => "Preguntas frecuentes",
            "link" => "/faq.ph",
            "isExternal" => false,
        ],
        [
            "title" => "Contacto",
            "link" => "/contact.php",
            "isExternal" => false,
        ],
        [
            "title" => "Solicitud de función",
            "link" => "https://www.instagram.com/centrodigitalsv?igsh=cWR3OTd5eHAwOTA1",
            "isExternal" => true,
        ],
        
        [
            "title" => "Reclamar recompensa",
            "link" => "/claim-reward.php",
            "isExternal" => false,
        ]
    ],
    'socials' => [
        [
            "title" => "Tik Tok",
            "link" => "https://www.tiktok.com/@centro.digital.st?_r=1&_t=ZS-94h9ZbDIahw",
            "isExternal" => true,
        ],
        [
            "title" => "Instagram",
            "link" => "https://www.instagram.com/centrodigitalsv?igsh=cWR3OTd5eHAwOTA1",
            "isExternal" => true,
        ],
        [
            "title" => "GitHub",
            "link" => "https://github.com/Alexandmrtz",
            "isExternal" => true,
        ],
        [
            "title" => "Youtube",
            "link" => "https://youtube.com/@centrodigitalstudio?si=dRWE9dBVIpw14b8z",
            "isExternal" => true,
        ],


    ],
    "legal" => [
        [
            "title" => "Privacy Policy (Android)",
            "link" => "/privacy-policy-android.php",
            "isExternal" => false,
        ],
        [
            "title" => "Privacy Policy (iOS)",
            "link" => "/privacy-policy-ios.php",
            "isExternal" => false,
        ],

        [
            "title" => "Terms of Service",
            "link" => "/terms-of-services.php",
            "isExternal" => false,
        ],


    ],
    "copyright" => "© 2026 Negox. Reservados todos los derechos.",
    "message" => "Hecho en El Salvador con 💙",
];


// faqs
$faqs = [
    "title" => "Frequently Asked Questions",
    "description" => "Find answers to common questions about SubFox and subscription management.",
    "faqsList" => [
        [
            "title" => "Getting Started",
            "faqs" => [
                [
                    "title" => "What is SubFox?",
                    "description" => "SubFox is a comprehensive subscription management app that helps you track all your subscriptions, manage payment dates, and save money by avoiding unwanted charges.",
                ],
                [
                    "title" => "How much does SubFox cost?",
                    "description" => "SubFox works on freemium model. All features are available at no cost with limited recurring tasks to help you manage your subscriptions effectively.",
                ],
                [
                    "title" => "Which devices does SubFox support?",
                    "description" => "SubFox is available for iOS devices through the App Store and Android devices through Google Play Store. The app works on phones and tablets.",
                ]
            ]
        ],
        [
            "title" => "Managing Subscriptions",
            "faqs" => [
                [
                    "title" => "How do I add a subscription?",
                    "description" => "Tap the '+' button, select a service from our extensive list or create a custom one, enter your subscription details like cost and billing cycle, and set your payment date.",
                ],
                [
                    "title" => "Can I add custom services not in your list?",
                    "description" => "Yes! SubFox allows you to create custom services for any subscription. Just tap 'Add Custom Service' and enter the service name, logo, and other details.",
                ],
                [
                    "title" => "How do I edit or cancel a subscription?",
                    "description" => "Tap on any subscription to view details, then use the edit button to modify information or mark it as cancelled to stop tracking future payments.",
                ]
            ]
        ],
        [
            "title" => "Features & Notifications",
            "faqs" => [
                [
                    "title" => "Will I get reminders for upcoming payments?",
                    "description" => "Yes, SubFox sends push notifications before your subscription payments are due. You can customize when you receive these reminders in the app settings.",
                ],
                [
                    "title" => "Does SubFox work offline?",
                    "description" => "Yes, SubFox works completely offline. All your subscription data is stored locally on your device, so you can access and manage your subscriptions anytime.",
                ],
                [
                    "title" => "Can I organize subscriptions into categories?",
                    "description" => "Absolutely! You can categorize your subscriptions into groups like Entertainment, Productivity, Health, etc., to keep them organized and easy to find.",
                ]
            ]
        ],
        [
            "title" => "Data & Privacy",
            "faqs" => [
                [
                    "title" => "Is my subscription data secure?",
                    "description" => "Yes, all your data is stored securely on your device. SubFox doesn't collect or store your personal subscription information on external servers.",
                ],
                [
                    "title" => "Can I export my subscription data?",
                    "description" => "Currently, SubFox stores all data locally on your device. We're working on adding export features in future updates to help you backup your subscription data.",
                ],
                [
                    "title" => "What happens if I delete the app?",
                    "description" => "If you delete SubFox, all your subscription data will be lost since it's stored locally. We recommend keeping the app installed or waiting for our upcoming backup feature.",
                ]
            ]
        ]
    ]
];



// current running redeem codes campaign - removed, now handled in claim-reward.php
$redeemCodesCampaign = [
    "isActive" => false,
    "showStats" => true, // Show claimed & available code counts
    "commitMessage"=>"I agree to rate app on App Store",
    "nonActiveProps" => [
        "title" => "Coming Soon",
        "description" => "We are working on a new giveaway campaign. Stay tuned for updates.",
    ],
    "title" => "🚀 SubFox Launch Giveaway",
    "description" => "Celebrate the launch of SubFox! Get 1 month free premium and help us improve the app.",
    "messages"=>[
        "success" => "Congratulations! You've successfully claimed your SubFox premium code. Thank you for supporting our launch!",
        "noCode" => "All launch giveaway codes have been claimed. Follow us on social media for future giveaways!",
    ],
    "formFields" => [
        "email" => [
            "label" => "Email Address",
            "type" => "email",
            "description" => "We'll send you updates about SubFox and future giveaways.",
            "required" => true,
        ],
    ],
    "rules" => [
        "title" => "How to participate",
        "description" => "Help us spread the word about SubFox and get rewarded!",
        "rules" => [
            [
                "title" => "1. Upvote our launch post",
                "description" => "Show your support by upvoting our SubFox launch announcement on Reddit, ProductHunt, or social media.",
            ],
            [
                "title" => "2. Give us an honest review",
                "description" => "Download SubFox and leave a genuine review on the App Store or Google Play. We hope you'll love it enough for 5 stars! ⭐",
            ],
            [
                "title" => "3. Share your feedback",
                "description" => "Help us improve SubFox by sharing your thoughts, suggestions, or reporting any bugs you encounter.",
            ],
        ]
    ],
    "guide" => [
        "title" => "How to redeem your code",
        "description" => "Follow these simple steps to activate your 1 month free premium subscription.",
        "steps" => [
            [
                "title" => "1. Download SubFox",
                "description" => "Get SubFox from the App Store or Google Play Store using the download buttons above.",
            ],
            [
                "title" => "2. Enter your redeem code",
                "description" => "When purchasing premium in the app, look for 'Redeem Code' option and enter your code.",
            ],
            [
                "title" => "3. Enjoy premium features",
                "description" => "Your premium subscription will be activated for 1 month. Manage unlimited subscriptions and save money!",
            ],
        ]
    ],
    "buttonText" => "🎁 Claim Launch Reward",
    "maxClaimLimits" => 1, // Maximum claims per user/device
    "id" => "Negox_Launch_2026" // Unique campaign identifier
];