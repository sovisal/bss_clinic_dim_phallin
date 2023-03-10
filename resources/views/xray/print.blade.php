<x-print-layout>
    {{-- <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/print-style.css') }}">
    </x-slot> --}}

    <section class="print-preview-a4">
        <x-para-clinic.print-header :row="$xray" title="លទ្ធផលពិនិត្យ X-Ray" />

        <section class="xray-body">
            <h3 class="text-center text-red title mb-2">{{ $xray->type_kh }}</h3>
            @foreach ($xray->filterAttr as $label => $attr)
            <div>
                <b>{!! __('form.xray.'. $label) !!}</b> : {!! $attr !!}
            </div>
            @endforeach
            <div class="mt-2" style="display: flex;">
                @if ($xray->image_1)
                <div style="width: 50%; padding: 0 10px;">
                    <img src="{{ asset('images/xrays/'. $xray->image_1) }}" alt="...">
                </div>
                @endif
                @if ($xray->image_2)
                <div style="width: 50%; padding: 0 10px;">
                    <img src="{{ asset('images/xrays/'. $xray->image_2) }}" alt="...">
                </div>
                @endif
            </div>
        </section>

        <x-para-clinic.print-doctor-signator />
        <x-para-clinic.print-footer />
    </section>

</x-print-layout>