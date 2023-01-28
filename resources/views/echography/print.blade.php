<x-print-layout>
    <section class="print-preview-a4">
        <header>
            <x-para-clinic.print-header :row="$echography" title="លទ្ធផលពិនិត្យ អេកូ" />
        </header>
        <section class="echography-body">
            @if ($echography->type_id <= 4)
                <div class="d-flex">
                    <div class="flex-fill">
                        <h3 class="text-center text-red title title-pregnant">{{ d_obj($echography, 'type', ['name_en', 'name_kh']) }}</h3>
                        <table width="100%" class="table-echo-pregnant">
                            @foreach ($echography->filterAttr as $label => $attr)
                                @if ($label == 'head_width' || $label == 'gs')
                                    <tr>
                                        <td width="32%"><b>-{!! __('form.echography.baby_measure') !!}</b></td>
                                        <td width="32%">: -<b>{!! __('form.echography.'. $label) !!}</b></td>
                                        <td> : {!! $attr !!}</td>
                                    </tr>
                                @elseif ($label == 'crl' || $label == 'thigh_length' || $label == 'baby_belly_circumference')
                                    <tr>
                                        <td width="32%"></td>
                                        <td width="32%">&nbsp;&nbsp;-<b>{!! __('form.echography.'. $label) !!}</b></td>
                                        <td> : {!! $attr !!}</td>
                                    </tr>
                                @elseif ($label == 'pregnancy_age1' || $label == 'pregnancy_age2')
                                    @if ($label == 'pregnancy_age1')
                                        <tr>
                                            <td width="32%"><b>-{!! __('form.echography.pregnancy_age1') !!}</b></td>
                                            <td colspan="2">: {!! $attr !!} {!! $echography->filterAttr['pregnancy_age2'] ?? '' !!}</td>
                                        </tr>
                                    @endif
                                @else
                                    <tr>
                                        <td class="{{ (($label == 'bady_date_of_birth' || $label == 'next_meeting')? 'text-red' : '') }}" width="30%">-<b>{!! __('form.echography.'. $label) !!}</b></td>
                                        <td class="{{ (($label == 'bady_date_of_birth' || $label == 'next_meeting')? 'text-red' : '') }}" colspan="2"> : {!! $attr !!}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                    <div style="width: 40%; margin-right: 20px; margin-top: 20px">
                        @if ($echography->image_1)
                        <img src="{{ asset('images/echographies/'. $echography->image_1) }}" alt="...">
                        @endif
                        @if ($echography->image_2)
                        <img src="{{ asset('images/echographies/'. $echography->image_2) }}" alt="...">
                        @endif
                    </div>
                </div>
            @else
                <h3 class="text-center text-red title">{{ d_obj($echography, 'type', ['name_en', 'name_kh']) }}</h3>
                @foreach ($echography->attribute as $label => $attr)
                <div>
                    <b>{!! __('form.echography.'. $label) !!}</b> : {!! $attr !!}
                </div>
                @endforeach
                <div class="d-flex justify-content-end" style="margin-top: 10px;">
                    @if ($echography->image_1)
                    <div style="margin-right: 5px; width: 50%;">
                        <img src="{{ asset('images/echographies/'. $echography->image_1) }}" alt="...">
                    </div>
                    @endif
                    @if ($echography->image_2)
                    <div style="margin-left: 5px; width: 50%;">
                        <img src="{{ asset('images/echographies/'. $echography->image_2) }}" alt="...">
                    </div>
                    @endif
                </div>
            @endif
        </section>
        <div class="signature">
            <div class="text-center">វេជ្ជបណ្ឌិត៖ <span class="KHMOULLIGHT">{{ d_obj($echography, 'doctor', ['name_kh']) }}</span></div>
            <img src="{{ asset('images/site/signature.png') }}" alt="">
        </div>

        <x-para-clinic.print-footer />
    </section>

</x-print-layout>