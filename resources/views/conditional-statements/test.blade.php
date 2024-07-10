<!--{{ $country }}!-->

<!-- //normal php directive for if statement. -->
<!-- <?php 
    if($country === "Nigeria"){
        echo "Nigeria";
    }else{
        echo "No country selected!";
    }
?> -->

<!-- //blade directive for if statement. -->
@if ($country === "Nigeria")
    Nigeria
@elseif($country === "Ghana")
    Ghana
@else
    Another country that is not Nigeria and Argentina.
@endif

@isset($city)
    {{ $city }}
@endisset

@empty($city)
    City is empty.
@endempty