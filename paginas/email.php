<?php
require('menu.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body class="skin-default-dark fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Mailbox</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Mailbox</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 bg-light border-left">
                                    <div class="card-body">
                                        <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-inbox-arrow-down"></i></button>
                                            <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                                            <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-delete"></i></button>
                                        </div>
                                        <button type="button " class="btn btn-secondary m-r-10 m-b-10"><i class="mdi mdi-reload font-18"></i></button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn m-b-10 btn-secondary font-18 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Mark as all read</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-t-0">
                                        <div class="card b-all shadow-none">
                                            <div class="inbox-center table-responsive">
                                                <table class="table table-hover no-wrap">
                                                    <tbody>
                                                        <tr class="unread">
                                                            <td style="width:40px">
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox0" value="check">
                                                                    <label for="checkbox0"></label>
                                                                </div>
                                                            </td>
                                                            <td style="width:40px" class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="text-right"> 12:30 PM </td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox1" value="check">
                                                                    <label for="checkbox1"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="text-right"> May 13 </td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox2" value="check">
                                                                    <label for="checkbox2"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="text-right"> May 12 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox3" value="check">
                                                                    <label for="checkbox3"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Akshay Kumar</td>
                                                            <td class="text-right"> May 12 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox4" value="check">
                                                                    <label for="checkbox4"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="text-right"> May 12 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox5" value="check">
                                                                    <label for="checkbox5"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="text-right"> May 11 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox6" value="check">
                                                                    <label for="checkbox6"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="text-right"> May 11 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox7" value="check">
                                                                    <label for="checkbox7"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Akshay Kumar</td>
                                                            <td class="text-right"> May 11 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox8" value="check">
                                                                    <label for="checkbox8"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="text-right"> May 10 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox9" value="check">
                                                                    <label for="checkbox9"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="text-right"> May 10 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox10" value="check">
                                                                    <label for="checkbox10"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="text-right"> May 10 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox11" value="check">
                                                                    <label for="checkbox11"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Akshay Kumar</td>
                                                            <td class="text-right"> May 09 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox m-t-0 m-b-0">
                                                                    <input type="checkbox" id="checkbox12" value="check">
                                                                    <label for="checkbox12"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="text-right"> May 09 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox13" value="check">
                                                                    <label for="checkbox13"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="text-right"> May 09 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox14" value="check">
                                                                    <label for="checkbox14"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="text-right"> May 09 </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php require('footer.php'); ?>