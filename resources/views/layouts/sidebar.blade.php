<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
         <li class="nav-item">
          <a href="{{ asset("/") }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
             </p>
          </a>
         <li class="nav-item">
            <a href="http://127.0.0.1:8000/admin/category" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Categories
               </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://127.0.0.1:8000/admin/user-role" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Role
               </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://127.0.0.1:8000/admin/reservation-status" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Reservation Status
               </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://127.0.0.1:8000/admin/mising-item-status" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Missing Item Status
               </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://127.0.0.1:8000/admin/attendance" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Attendance
               </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://127.0.0.1:8000/admin/reservation" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reservation
               </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://127.0.0.1:8000/admin/schedule" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Schedule
               </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://127.0.0.1:8000/admin/replacement" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Pengajuan Replacement Class
               </p>
            </a>
          </li>

          Route::resource('admin/attendance', 'App\Http\Controllers\Admin\attendanceController');
          Route::resource('admin/reservation', 'App\Http\Controllers\Admin\reservationController');
          Route::resource('admin/schedule', 'App\Http\Controllers\Admin\scheduleController');
          Route::resource('admin/replacement', 'App\Http\Controllers\Admin\replacementController');
</ul>