<x-app-layout>
    <x-slot name="header">
        @if(isset($_GET['back']))
        <x-form.button-back href="{!! route('setting.xray-type.index') !!}"/>
        @endif
        <x-form.button href="{{ route('para_clinic.xray.create') }}" label="Create" icon="bx bx-plus"/>
        <x-report-filter url="{{ route('para_clinic.xray.index') }}"/>
    </x-slot>
    <x-slot name="css">
        <style>
            #image-slider {
                width: 600px;
                margin: 10px auto;
                overflow: hidden;
            }
            #image-slider .carousel-inner {
                border-radius: 0;
            }
        </style>
    </x-slot>
    <x-slot name="js">
        <script>
            function getImage(img_1, img_2) {
                var inner_slider;
                $('#image-modal .modal-body .no-photo').remove();
                if (img_1 != '' || img_2 != '') {
                    $('#image-modal #image-slider').removeClass('sr-only');
                    if (img_1 != '') {
                        inner_slider = `<div class="carousel-item active">
                                            <img src="/images/xrays/${ img_1 }" class="d-block w-100" alt="...">
                                        </div>`;
                    }
                    if (img_2 != '') {
                        inner_slider += `<div class="carousel-item ${ ((img_1 == '')? 'active' : '') }">
                                            <img src="/images/xrays/${ img_2 }" class="d-block w-100" alt="...">
                                        </div>`;
                    }
                    $('#image-modal #image-slider .carousel-inner').html(inner_slider);
                } else {
                    $('#image-modal #image-slider').addClass('sr-only');
                    $('#image-modal .modal-body').append('<div class="no-photo text-center py-1">No photo</div>');
                }
                $('#image-modal').modal();
            }
        </script>
    </x-slot>
    <x-card :foot="false" :action-show="false">
        <x-table class="table-hover table-striped" id="datatables" data-table="patients">
            <x-slot name="thead">
                <tr>
                    <th>No</th>
                    <th>Code</th>
                    <th>Form</th>
                    <th>Patient</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Requested Date</th>
                    <th>Physician</th>
                    <th>Price</th>
                    <th>Payment</th>
                    <th>User</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </x-slot>
            @foreach($rows as $i => $row)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{!! d_link($row->code, "javascript:getDetail(" . $row->id . ", '" . route('para_clinic.xray.getDetail', 'Xray Detail') . "')") !!}</td>
                <td>{!! $row->typeLink !!}</td>
                <td>{!! $row->patientLink !!}</td>
                <td>{{ d_obj($row, 'gender', ['title_en', 'title_kh']) }}</td>
                <td>{{ d_obj($row, 'age') }}</td>
                <td>{{ d_obj($row, 'address', ['village_kh', 'commune_kh', 'district_kh', 'province_kh']) }}</td>
                <td>{{ render_readable_date($row->requested_at) }}</td>
                <td>{!! $row->doctorLink !!}</td>
                <td>{{ d_currency($row->price) }}</td>
                <td>{!! d_paid_status($row->payment_status) !!}</td>
                <td>{{ d_obj($row, 'user', 'name') }}</td>
                <td>{!! d_para_status($row->status) !!}</td>
                <td>
                    <x-table-action-btn
                        module="para_clinic.xray"
                        module-ability="Xray"
                        :id="$row->id"
                        :is-trashed="$row->trashed()"
                        :disable-edit="$row->trashed() || !($row->status=='1' && $row->payment_status == 0)"
                        :disable-delete="!($row->status=='1' && $row->payment_status == 0)"
                        :show-btn-show="false"
                        :show-btn-force-delete="true"
                    >
                        <x-form.button color="warning" class="btn-sm" onclick="getImage('{{ $row->image_1 }}', '{{ $row->image_2 }}')" icon="bx bx-image" />
                        <x-form.button color="dark" class="btn-sm" onclick="printPopup('{{ route('para_clinic.xray.print', $row->id) }}')" icon="bx bx-printer" />
                    </x-table-action-btn>
                </td>
            </tr>
            @endforeach
        </x-table>
    </x-card>

    <x-para-clinic.modal-detail />
    <x-modal :foot="false" id="image-modal" dialogClass="modal-lg">
        <x-slot name="header">
            View XRay Photo
        </x-slot>
        <x-slider id="image-slider" :autoplay="false" />
    </x-modal>
    <x-modal-confirm-delete />

</x-app-layout>