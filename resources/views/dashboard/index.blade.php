@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Welcome Back, {{ auth()->user()->name }}</h1>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><i data-feather="archive"></i> Jumlah Post</h5>
                  <hr>
                  <p class="card-text">{{ $total }} Post</p>
                  
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><i data-feather="user"></i> Jumlah User</h5>
                  <hr>
                  <p class="card-text">{{ $user }} User</p>
                  
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><i data-feather="user-check"></i> Jumlah Admin</h5>
                  <hr>
                  <p class="card-text">{{ $admin }} Admin</p>
                  
                </div>
              </div>
            </div>
          </div>
    </div>
    <br><br>

    {{-- Kalender --}}
    <div class="calendar">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">February</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2021</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days"></div>
        </div>
        <div class="calendar-footer">
            <div class="toggle">
                <span>Dark Mode</span>
                <div class="dark-mode-switch">
                    <div class="dark-mode-switch-ident"></div>
                </div>
            </div>
        </div>
        <div class="month-list"></div>
      </div>
      <br><br>

      
      <script src="/js/kalender.js"></script>
      

@endsection

