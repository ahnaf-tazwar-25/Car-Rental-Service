@extends('UI_S.earnWithCar.renterDashBoard')

@section('content')
    asdadasdasdasd
@endsection


@section('renterAddCarReg')
    <div class="row mt-4">
        <div class="col-6">
            <select name="plateCityName" class="p-3 w-75 border" required>
                <option selected>Dhaka Metro</option>
                <option>Chatta Metro</option>
                <option>Rajshahi Metro</option>
                <option>Cox Bazar</option>
                <option>Sylhet</option>
                <option>Nawga</option>
                <option>Norshindi</option>
            </select>
        </div>
        <div class="col-6">
            <select name="plateName" class="p-3 w-75 text-center border" required>
                <option>অ</option>
                <option>ই</option>
                <option>উ</option>
                <option>এ</option>
                <option>ক</option>
                <option>খ</option>
                <option selected>গ</option>
                <option>ঘ</option>
                <option>ঙ</option>
                <option>চ</option>
                <option>ছ</option>
                <option>জ</option>
                <option>ঝ</option>
                <option>ত</option>
                <option>থ</option>
                <option>ঢ</option>
                <option>ড</option>
                <option>ট</option>
                <option>ঠ</option>
                <option>দ</option>
                <option>ধ</option>
                <option>ন</option>
                <option>প</option>
                <option>ফ</option>
                <option>ব</option>
                <option>ভ</option>
                <option>ম</option>
                <option>য</option>
                <option>র</option>
                <option>ল</option>
                <option>শ</option>
                <option>স</option>
                <option>হ</option>
            </select>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-6">
            <select name="plateRegNumber" class="p-3 w-75 text-center border" required>
                <option>০১</option>
                <option>০২</option>
                <option>০৩</option>
                <option>০৪</option>
                <option>০৫</option>
                <option>০৬</option>
                <option>০৭</option>
                <option>০৮</option>
                <option>০৯</option>
                <option>১০</option>
                <option selected>১১</option>
                <option>১২</option>
                <option>১৩</option>
                <option>১৪</option>
                <option>১৫</option>
                <option>১৬</option>
                <option>১৭</option>
                <option>১৮</option>
                <option>১৯</option>
                <option>২০</option>
                <option>২১</option>
                <option>২২</option>
                <option>২৩</option>
                <option>২৪</option>
                <option>২৫</option>
                <option>২৬</option>
                <option>২৭</option>
                <option>২৮</option>
                <option>২৯</option>
                <option>৩০</option>
                <option>৩১</option>
                <option>৩২</option>
                <option>৩৩</option>
                <option>৩৪</option>
                <option>৩৫</option>
                <option>৩৬</option>
                <option>৩৭</option>
                <option>৩৮</option>
                <option>৩৯</option>
                <option>৪০</option>
                <option>৪১</option>
                <option>৪২</option>
                <option>৪৩</option>
                <option>৪৪</option>
                <option>৪৫</option>
                <option>৪৬</option>
                <option>৪৭</option>
                <option>৪৮</option>
                <option>৪৯</option>
                <option>৫০</option>
                <option>৫১</option>
                <option>৫২</option>
                <option>৫৩</option>
                <option>৫৪</option>
                <option>৫৫</option>
                <option>৫৬</option>
                <option>৫৭</option>
                <option>৫৮</option>
                <option>৫৯</option>
                <option>৬০</option>
                <option>৬১</option>
                <option>৬২</option>
                <option>৬৩ </option>
                <option>৬৪</option>
                <option>৬৫</option>
                <option>৬৬</option>
                <option>৬৭</option>
                <option>৬৮</option>
                <option>৬৯</option>
                <option>৭০</option>
                <option>৭১</option>
                <option>৭২</option>
                <option>৭৩</option>
                <option>৭৪</option>
                <option>৭৫</option>
                <option>৭৬</option>
                <option>৭৭</option>
                <option>৭৮</option>
                <option>৭৯</option>
                <option>৮০</option>
                <option>৮১</option>
                <option>৮২</option>
                <option>৮৩</option>
                <option>৮৪</option>
                <option>৮৫</option>
                <option>৮৬</option>
                <option>৮৭</option>
                <option>৮৮</option>
                <option>৮৯</option>
                <option>৯০</option>
                <option>৯১</option>
                <option>৯২</option>
                <option>৯৩</option>
                <option>৯৪</option>
                <option>৯৫</option>
                <option>৯৬</option>
                <option>৯৭ </option>
                <option>৯৮</option>
                <option>৯৯ </option>
            </select>
        </div>
        <div class="col-6">
            <select name="plateVehicleNumber1" class="col-sm-2 h-100 text-center border" required>
                <option selected>০</option>
                <option>১</option>
                <option>২</option>
                <option>৩</option>
                <option>৪</option>
                <option>৫</option>
                <option>৬</option>
                <option>৭</option>
                <option>৮</option>
                <option>৯</option>
            </select>

            <select name="plateVehicleNumber2" class="col-sm-2 h-100 text-center border" required>
                <option selected>০</option>
                <option>১</option>
                <option>২</option>
                <option>৩</option>
                <option>৪</option>
                <option>৫</option>
                <option>৬</option>
                <option>৭</option>
                <option>৮</option>
                <option>৯</option>
            </select>

            <select name="plateVehicleNumber3" class="col-sm-2 h-100 text-center border" required>
                <option selected>০</option>
                <option>১</option>
                <option>২</option>
                <option>৩</option>
                <option>৪</option>
                <option>৫</option>
                <option>৬</option>
                <option>৭</option>
                <option>৮</option>
                <option>৯</option>
            </select>

            <select name="plateVehicleNumber4" class="col-sm-2 h-100 text-center border" required>
                <option selected>০</option>
                <option>১</option>
                <option>২</option>
                <option>৩</option>
                <option>৪</option>
                <option>৫</option>
                <option>৬</option>
                <option>৭</option>
                <option>৮</option>
                <option>৯</option>
            </select>
        </div>
    </div>
@endsection
