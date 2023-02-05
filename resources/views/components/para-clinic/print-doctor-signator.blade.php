@props([
	
])
<div class='text-center doctor_signature' style='position: absolute; right: 30px; bottom: 1.5cm;'>
    <div class='KHMOULLIGHT'>គ្រូពេទ្យព្យាបាល</div>
    <br/> <br /><br />
    <div><span class='KHMOULLIGHT' style='font-size: 14px;'>វេជ្ជបណ្ឌិត.</span> <span class='KHMOULLIGHT' style='font-size: 16px;'>{{ auth()->user()->setting()->sign_name_kh }}</span></div>
</div>