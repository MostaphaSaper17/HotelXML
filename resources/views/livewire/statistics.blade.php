<div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-3 modern-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="header-title">
                        <i class="fas fa-chart-line icon"></i> Monthly Report
                    </div>
                    <select id="month" name="month">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12" selected>December</option>
                    </select>
                </div>
                <div class="card-body">
                    <div class="report-info">
                        <p>Total Amount Of Orders, Sep 2023</p>
                        <h4>500 <span>USD</span></h4>
                    </div>
                    <canvas id="myBarChart" width="100" height="50" hidden></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-3 modern-card">
                <div class="card-header">Credit Statement Used</div>
                <div class="card-body">
                    <canvas id="myBarChart-2" width="100" height="50"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-3 modern-card">
                <div class="card-header">Your Booking Statistics</div>
                <div class="card-body">
                    <canvas id="myPieChart" width="100%" height="50"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
