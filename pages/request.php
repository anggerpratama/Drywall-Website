<?php 
    include 'header.php';
?>
    <!-- serve content -->
    <div style="margin-top:20vh"></div>
    <h1 class="text-center"><b>REQUEST A FREE CONSULTION OR ESTIMATE </b></h1>
    <div class="lineyew"></div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <table class="table table-striped table-responsive">
                <tbody>
                    <tr>
                        <th rowspan="6" class="text-center rowspan1">PROJECT TYPE </th>
                        <td>Drywall Install &amp; Repair</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Painting – Commercial &amp; Residential </td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Interior</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Exterior</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Home Renovation</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td>Small Projects / Repairs</td>
                        <td><input type="checkbox" name="" id=""></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            
            <form method="POST" role="form">
            
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon sideform1" id="basic-addon1"><b>NAME</b></span>
                        <input type="text" class="form-control sideinput1" placeholder="John here" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon sideform2" id="basic-addon1"><b>Email</b></span>
                        <input type="email" class="form-control sideinput2" placeholder="john@example.com" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon sideform1" id="basic-addon1"><b>Phone</b></span>
                        <input type="number" class="form-control sideinput1" placeholder="((77D) 123-4567)" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon sideform2" id="basic-addon1"><b>Address</b></span>
                        <input type="text" class="form-control sideinput2" placeholder="Where" aria-describedby="basic-addon1">
                    </div>
                    <div class="my-3"></div>
                        <div class="sideform3 text-center"> <b> COMMENT </b></div>
                        <textarea rows="6" class="form-control sideinput1"></textarea>
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block onnsub ">SUBMIT</button>
                </div>
            </form>
            
        </div>
    </div>

    <!-- end of coontent -->
<?php 
    include 'footer.php';
?>