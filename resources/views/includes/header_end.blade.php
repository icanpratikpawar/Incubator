<!-- App css -->
        <link href="{{ URL::asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('/') }}assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('/') }}assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <style>
        #topnav .topbar-main .logo {
            background-color: #fff;
            text-align: center;
            line-height: 0 !important;
            width: 150px;
        }
        .btn, table thead th {
            text-transform: uppercase;
        }

        .buttons-html5 {
            margin-right: 0.6%;
            width: 200px;
        }

        #datatable-buttons_filter {
            float: right;
        }
    </style>
    </head>

    <body>

    @include('includes/topbar')
    