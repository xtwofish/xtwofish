@extends('layouts.master')

@section('title', 'Clean Blog')

@section('content')


    <section id="content">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2> 教   室   申   請   單 </h2>
                    <hr class="colorgraph">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        {{--日期--}}
                        <div class="col-xs-4 col-sm-2 col-md-2">
                            <div class="form-group">
                              <label>日期</label>
                            </div>
                        </div>
                        <div class="col-xs-20 col-sm-10 col-md-10">
                            <div class="form-group">
                                <input type="date" name="name" class="form-control" id="name"  value="<?php echo date("Y-m-d");?>">
                            </div>
                        </div>
                        {{--教室--}}
                        <div class="col-xs-4 col-sm-2 col-md-2">
                            <div class="form-group">
                                <label>申請教室</label>
                            </div>
                        </div>
                        <div class="col-xs-20 col-sm-10 col-md-10">
                            <div class="form-group">
                                <select name="YourClassroom" class="form-control" >
                                    　<option>申請教室</option>
                                    　<option value="M501">M501</option>
                                    　<option value="M502">M502</option>
                                    <option value="M503">M503</option>
                                    <option value="M504">M504</option>
                                    <option value="M509">M509</option>
                                    <option value="M510">M510</option>
                                    <option value="M511">M511</option>
                                    <option value="M513">M512</option>
                                    <option value="M514">M514</option>
                                    <option value="M516">M516</option>
                                </select>
                            </div>
                        </div>
                        {{--開始時間--}}
                        <div class="col-xs-4 col-sm-2 col-md-2">
                            <div class="form-group">
                                <label>開始時間</label>
                            </div>
                        </div>
                        <div class="col-xs-20 col-sm-10 col-md-10">
                            <div class="form-group">
                                <input type="time" name="starttime" class="form-control" id="starttime" value="08:00"/>
                            </div>
                        </div>
                        {{--結束時間--}}
                        <div class="col-xs-4 col-sm-2 col-md-2">
                            <div class="form-group">
                                <label>結束時間</label>
                            </div>
                        </div>
                        <div class="col-xs-20 col-sm-10 col-md-10">
                            <div class="form-group">
                                <input type="time" name="endtime" class="form-control" id="endtime" value="17:00"/>
                            </div>
                        </div>
                        {{--班級--}}
                        <div class="col-xs-24 col-sm-12 col-md-12">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control"  id="name" placeholder="班級" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        {{--姓名--}}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="姓名" data-rule="minlen:2" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        {{--手機--}}
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="手機號碼" data-rule="minlen:10" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        {{--申請事由--}}
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="申請事由"></textarea>
                            <div class="validation"></div>
                        </div>

                        <div class="text-center"><button type="submit" class="btn btn-theme btn-block btn-md">送出</button></div>
                    </form>
                    <hr class="colorgraph">

                </div>
            </div>
        </div>
    </section>
    {{--<footer></footer>--}}
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/uisearch.js"></script>
    <script src="js/jquery.cubeportfolio.min.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/animate.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
    <script src="js/custom.js"></script>


    <script src="contactform/contactform.js"></script>


@endsection