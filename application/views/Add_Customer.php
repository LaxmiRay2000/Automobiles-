<!DOCTYPE html>

<head>
    <link href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
    <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
    <link href='https://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
    <script src='https://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>

    <style>
        .indent-small {
            margin-left: 5px;
        }

        .form-group.internal {
            margin-bottom: 0;
        }

        .dialog-panel {
            margin: 10px;
        }

        .datepicker-dropdown {
            z-index: 200 !important;
        }

        .panel-body {
            background: #e5e5e5;
            /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
            /* FF3.6+ */
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
            /* Chrome,Safari4+ */
            background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
            /* Chrome10+,Safari5.1+ */
            background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
            /* Opera 12+ */
            background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
            /* IE10+ */
            background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
            /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
            /* IE6-9 fallback on horizontal gradient */
            font: 600 15px "Open Sans", Arial, sans-serif;
        }

        label.control-label {
            font-weight: 600;
            color: #777;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.multiselect').multiselect();
            $('.datepicker').datepicker();
        });
    </script>
</head>

<body>
    <div class='container'>
        <div class='panel panel-primary dialog-panel'>
            <div class='panel-heading' >
        <h5 style=" font-size: 25px;">Add Customer</h5>
            </div>
            <div class='panel-body'>
                <form class='form-horizontal' role='form'>

                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Name</label>
                        <div class='col-md-8'>
                            <div class='col-md-2'>
                                <div class='form-group internal'>
                                    <select class='form-control' id='id_title'>
                                        <option>Mr</option>
                                        <option>Ms</option>
                                        <option>Mrs</option>
                                        <option>Miss</option>
                                        <option>Dr</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-md-3 indent-small'>
                                <div class='form-group internal'>
                                    <input class='form-control' id='id_first_name' placeholder='First Name' type='text'>
                                </div>
                            </div>
                            <div class='col-md-3 indent-small'>
                                <div class='form-group internal'>
                                    <input class='form-control' id='id_last_name' placeholder='Last Name' type='text'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact</label>
                        <div class='col-md-6'>
                            <div class='form-group'>
                                <div class='col-md-11'>
                                    <input class='form-control' id='id_email' placeholder='E-mail' type='text'>
                                </div>
                            </div>
                            <div class='form-group internal'>
                                <div class='col-md-11'>
                                    <input class='form-control' id='id_phone' placeholder='Phone: (xxx) - xxx xxxx' type='text'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Registration Date</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control datepicker' id='id_checkin' type="date">
                                
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Customer Description</label>
                        <div class='col-md-6'>
                            <textarea class='form-control' id='id_comments' rows='3'></textarea>
                        </div>
                    </div>


                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Full Address</label>
                        <div class='col-md-6'>
                            <textarea class='form-control' id='id_comments' rows='3'></textarea>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-offset-4 col-md-3'>
                            <button class='btn-lg btn-primary' type='submit'>Save</button>
                        </div>
                        <div class='col-md-3'>
                            <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>