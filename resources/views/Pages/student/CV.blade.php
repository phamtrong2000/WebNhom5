@extends('Pages.layout.menu')
@section('content')

<div class="container">
        <a href="./Pages/Company/Share/{{$user->id}}"><button type="submit" class="btn btn-primary" >Blog cá nhân</button></a>

        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin cá nhân</h6>
                    </div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3 avatar-info">
                            <br>
                            <div class="avatar-info-area" style="background-image: url('upload/student/{{$student->Hinh}}');" ></div>
                        </div>
                        <div class="col-md-6 mb-3 info-individual">

                            <br>
                            <h5><i class="fa fa-user-circle" aria-hidden="true"></i>        {{$user ->name}}<br></h5>
                            <h5><i class="fa fa-address-book" aria-hidden="true"></i>     {{$student->address}}<br></h5>
                            <h5><i class="fa fa-envelope" aria-hidden="true"></i>      {{$user->email}}<br></h5>
                            <h5><i class="fa fa-phone-square" aria-hidden="true"></i>    {{$student->mobile}} <br></h5>
                            <h5><i class="fas fa-birthday-cake"></i>     {{$student->birth}}<br></h5>
                            <h5><i class="fas fa-venus-mars"></i>      {{$student->gender}}<br></h5>

                        </div>

                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>

                    <div class="card-body">

                        <div class="form-group">
                            <br>
                            <h5>    <i class="fas fa-briefcase"></i>    Khoa: {{$student->department}}<br></h5>
                            <h5><i class="fas fa-book-open"></i>   Ngành: {{$student->major}}<br></h5>
                            <h5><i class="fas fa-window-restore"></i>   Bậc: {{$user->level}}<br></h5>
                            <h5><i class="fa fa-phone-square" aria-hidden="true"></i>    {{$student->mobile}} <br></h5>
                            <h5><i class="fas fa-balance-scale"></i>    Chương trình đào tạo: {{$student->trainingProgram}}<br></h5>
                            <h5><i class="fas fa-graduation-cap"></i>   Khoá: {{$student->yearOfCourse}}<br></h5>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Quá trình học tập</h6>
                </div>
                <div class="card-body">
                    <br>
                    <h5><i class="fas fa-star"></i>    GPA: {{$student->gpa}}<br></h5>
                    <h5><i class="fas fa-crown"></i>  Khen thưởng: {{$student->prize}}<br></h5>
                    <h5><i class="fas fa-battery-full"></i>   Kỹ năng: {{$student->forte}}<br></h5>
                    <h5><i class="fas fa-basketball-ball"></i>    Sở trường: {{$student->skill}} <br></h5>
                    <h5><i class="fas fa-heart"></i>    Sở thích: {{$student->favorite}}<br></h5>
                   
                </div>
            </div>
        </div>
    </form>
</div>
@endsection