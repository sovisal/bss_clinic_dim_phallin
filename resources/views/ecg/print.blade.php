<x-print-layout>
    <section class="print-preview-a4">
        <x-para-clinic.print-header :row="$ecg" title="លទ្ធផលពិនិត្យ ECG" />

        <section class="ecg-body">
            <h3 class="text-center text-red title mb-2">{{ $ecg->type_kh }}</h3>
            @foreach ($ecg->filterAttr as $label => $attr)
            <div>
                <b>{!! __('form.ecg.'. $label) !!}</b> : {!! $attr !!}
            </div>
            @endforeach
            <div class="mt-2" style="display: flex;">
                @if ($ecg->image_1)
                <div style="width: 50%; padding: 0 10px;">
                    <img src="{{ asset('images/ecgs/'. $ecg->image_1) }}" alt="...">
                </div>
                @endif
                @if ($ecg->image_2)
                <div style="width: 50%; padding: 0 10px;">
                    <img src="{{ asset('images/ecgs/'. $ecg->image_2) }}" alt="...">
                </div>
                @endif
            </div>
        </section>
        
        <x-para-clinic.print-doctor-signator />
        <x-para-clinic.print-footer />
    </section>

</x-print-layout>