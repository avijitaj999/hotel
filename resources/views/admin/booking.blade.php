<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
   @include('admin.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('admin.mainsidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Hotel Management Form</h1>
                </section>
            
                <!-- Main content -->
                <section class="content">
                    <!-- Your hotel form goes here -->
                    <div style="max-width: 800px; margin: 40px auto; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        <h3 style="font-size: 24px; margin-bottom: 20px; color: #333;">Hotel Management Form</h3>
            
                        <form action="{{ route('hotel.store') }}" method="POST">
                            @csrf
                            <div style="margin-bottom: 15px;">
                                <label for="guest_name" style="display: block; font-size: 16px; color: #555; margin-bottom: 5px;">Guest Name:</label>
                                <input type="text" id="guest_name" name="guest_name" required style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                            </div>
            
                            <div style="margin-bottom: 15px;">
                                <label for="email" style="display: block; font-size: 16px; color: #555; margin-bottom: 5px;">Email:</label>
                                <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                            </div>
            
                            <div style="margin-bottom: 15px;">
                                <label for="phone" style="display: block; font-size: 16px; color: #555; margin-bottom: 5px;">Phone Number:</label>
                                <input type="text" id="phone" name="phone" required style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                            </div>
            
                            <div style="margin-bottom: 15px;">
                                <label for="check_in" style="display: block; font-size: 16px; color: #555; margin-bottom: 5px;">Check-In Date:</label>
                                <input type="date" id="check_in" name="check_in" required style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                            </div>
            
                            <div style="margin-bottom: 15px;">
                                <label for="check_out" style="display: block; font-size: 16px; color: #555; margin-bottom: 5px;">Check-Out Date:</label>
                                <input type="date" id="check_out" name="check_out" required style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                            </div>
            
                            <div style="margin-bottom: 15px;">
                                <label for="room_type" style="display: block; font-size: 16px; color: #555; margin-bottom: 5px;">Room Type:</label>
                                <select id="room_type" name="room_type" required style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                                    <option value="single">Single</option>
                                    <option value="double">Double</option>
                                    <option value="suite">Suite</option>
                                </select>
                            </div>
            
                            <div style="margin-bottom: 15px;">
                                <label for="payment_method" style="display: block; font-size: 16px; color: #555; margin-bottom: 5px;">Payment Method:</label>
                                <select id="payment_method" name="payment_method" required style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                                    <option value="credit_card">Credit Card</option>
                                    <option value="debit_card">Debit Card</option>
                                    <option value="cash">Cash</option>
                                </select>
                            </div>
            
                            <div style="margin-bottom: 15px;">
                                <label for="special_requests" style="display: block; font-size: 16px; color: #555; margin-bottom: 5px;">Special Requests:</label>
                                <textarea id="special_requests" name="special_requests" style="width: 100%; height: 100px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;"></textarea>
                            </div>
            
                            <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; font-size: 16px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;">
                                Submit
                            </button>
                        </form>
                    </div>
                </section>
            </div>
            

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    @include('admin.js')
</body>

</html>