<!DOCTYPE html>
<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free" lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title> @yield('title', 'Gyanmarga Education and Services') </title>

    <meta name="description" content="Gyanmarga Education and Services" />
    <meta name='robots' content='noindex, follow' />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="{{ asset($setting['site_fav_icon'] ?? 'frontend/image/logo.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"
        integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link class="template-customizer-core-css" rel="stylesheet"
        href="{{ asset('admin/assets/vendor/css/core.css') }}" />
    <link class="template-customizer-theme-css" rel="stylesheet"
        href="{{ asset('admin/assets/vendor/css/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>

    <script src="{{ asset('admin/assets/js/config.js') }}"></script>

    <!-- toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- toastr ends-->

    <!-- fancybox image -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
        type="text/css" media="screen" />
    <style>
        .dash-icon {
            font-size: 2.25rem !important;
        }
    </style>
    <style>
        .ck-editor__editable {
            min-height: 300px;
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.admin.sidebar')

            <div class="layout-page">
                @include('layouts.admin.nav')

                <div class="content-wrapper">
                    <div class="container flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    @include('layouts.admin.footer')
                    <div class="content-backdrop fade"></div>
                </div>
            </div>

        </div>

        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Core JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"
        integrity="sha512-sH8JPhKJUeA9PWk3eOcOl8U+lfZTgtBXD41q6cO/slwxGHCxKcW45K4oPCUhHG7NMB4mbKEddVmPuTXtpbCbFA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script async defer src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

    <!-- CkEditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- sweet alert -->

    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    <!-- fancybox image-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js">
    </script>

    @yield('scripts')

    <script>
        ckeditor("ckeditor");
        ckeditor("ckeditor1");
        ckeditor("ckeditor2");
        ckeditor("video-desc");
        ckeditor("overviewckeditor");
        ckeditor("aboutckeditor");
        ckeditor("homepage");

        function ckeditor($className) {
            CKEDITOR.ClassicEditor.create(document.querySelector("." + $className), {
                toolbar: {
                    items: [
                        "heading",
                        "|",
                        "bold",
                        "italic",
                        "strikethrough",
                        "underline",
                        "code",
                        "subscript",
                        "superscript",
                        "removeFormat",
                        "|",
                        "bulletedList",
                        "numberedList",
                        "|",
                        "outdent",
                        "indent",
                        "|",
                        "undo",
                        "redo",
                        "|",
                        "fontSize",
                        "fontFamily",
                        "fontColor",
                        "|",
                        "alignment",
                        "|",
                        "link",
                        "insertImage",
                        "blockQuote",
                        "insertTable",
                        "mediaEmbed",
                        "|",
                        "specialCharacters",
                        "horizontalLine",
                        "pageBreak",
                        "|",
                        "sourceEditing",
                    ],
                    shouldNotGroupWhenFull: true,
                },
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true,
                    },
                },
                heading: {
                    options: [{
                            model: "paragraph",
                            title: "Paragraph",
                            class: "ck-heading_paragraph",
                        },
                        {
                            model: "heading1",
                            view: "h1",
                            title: "Heading 1",
                            class: "ck-heading_heading1",
                        },
                        {
                            model: "heading2",
                            view: "h2",
                            title: "Heading 2",
                            class: "ck-heading_heading2",
                        },
                        {
                            model: "heading3",
                            view: "h3",
                            title: "Heading 3",
                            class: "ck-heading_heading3",
                        },
                        {
                            model: "heading4",
                            view: "h4",
                            title: "Heading 4",
                            class: "ck-heading_heading4",
                        },
                        {
                            model: "heading5",
                            view: "h5",
                            title: "Heading 5",
                            class: "ck-heading_heading5",
                        },
                        {
                            model: "heading6",
                            view: "h6",
                            title: "Heading 6",
                            class: "ck-heading_heading6",
                        },
                    ],
                },
                placeholder: "",
                fontFamily: {
                    options: [
                        "default",
                        "Arial, Helvetica, sans-serif",
                        "Courier New, Courier, monospace",
                        "Georgia, serif",
                        "Lucida Sans Unicode, Lucida Grande, sans-serif",
                        "Tahoma, Geneva, sans-serif",
                        "Times New Roman, Times, serif",
                        "Trebuchet MS, Helvetica, sans-serif",
                        "Verdana, Geneva, sans-serif",
                    ],
                    supportAllValues: true,
                },
                fontSize: {
                    options: [
                        8,
                        10,
                        12,
                        14,
                        "default",
                        18,
                        20,
                        22,
                        24,
                        26,
                        28,
                        30,
                        32,
                        34,
                        36,
                    ],
                    supportAllValues: true,
                },
                htmlSupport: {
                    allow: [{
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true,
                    }, ],
                },
                htmlEmbed: {
                    showPreviews: true,
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: "https://",
                        toggleDownloadable: {
                            mode: "manual",
                            label: "Downloadable",
                            attributes: {
                                download: "file",
                            },
                        },
                    },
                },
                mention: {
                    feeds: [{
                        marker: "@",
                        feed: [
                            "@apple",
                            "@bears",
                            "@brownie",
                            "@cake",
                            "@cake",
                            "@candy",
                            "@canes",
                            "@chocolate",
                            "@cookie",
                            "@cotton",
                            "@cream",
                            "@cupcake",
                            "@danish",
                            "@donut",
                            "@dragée",
                            "@fruitcake",
                            "@gingerbread",
                            "@gummi",
                            "@ice",
                            "@jelly-o",
                            "@liquorice",
                            "@macaroon",
                            "@marzipan",
                            "@oat",
                            "@pie",
                            "@plum",
                            "@pudding",
                            "@sesame",
                            "@snaps",
                            "@soufflé",
                            "@sugar",
                            "@sweet",
                            "@topping",
                            "@wafer",
                        ],
                        minimumCharacters: 1,
                    }, ],
                },
                removePlugins: [
                    "CKBox",
                    "CKFinder",
                    "EasyImage",
                    "RealTimeCollaborativeComments",
                    "RealTimeCollaborativeTrackChanges",
                    "RealTimeCollaborativeRevisionHistory",
                    "PresenceList",
                    "Comments",
                    "TrackChanges",
                    "TrackChangesData",
                    "RevisionHistory",
                    "Pagination",
                    "WProofreader",
                    "MathType",
                ],

            });
        }
    </script>
    <script>
        $('.dropify').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        $('.mainlogo').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        $('.footerlogo').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        $('.homepageimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        $('.faqimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
        $('.contactimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.blogimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.gallerysimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.serviceimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.reviewimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.videoimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.downloadimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.abroadsimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.locationimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.memberimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.partnerimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });

        $('.about_first_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });

        $('.about_second_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });

        $('.scholorship_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.aboutpage_image').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });
        $('.aboutpage_bannerimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });

        $('.team_bannerimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });

        $('.services_bannerimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });

        $('.testimonials_bannerimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });

        $('.country_bannerimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });


        $('.course_bannerimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });

        $('.blog_bannerimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });

        $('.contact_bannerimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });

        $('.faq_bannerimage').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happend',
            }
        });

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
    </script>

</body>

</html>
