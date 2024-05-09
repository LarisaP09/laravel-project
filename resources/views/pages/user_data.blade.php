@include('navigation.nav-bar')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <span class="font-weight-bold"></span>
                <span class="text-black-50"></span>
                <span> </span>
            </div>
        </div>
        
        <div class="col-md-5 border-right">
            <div class="p-2 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <hr class="border-top border-dark my-0">
                <div class="row mt-2">
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="label font-weight-bold">Last name:</label>
                            <span></span>
                        </div>
                        <div class="col-md-6">
                            <label class="label font-weight-bold">First name:</label>
                            <span></span>
                        </div>
                        <div class="col-md-6">
                            <label class="label font-weight-bold">Username:</label>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('navigation.footer')
