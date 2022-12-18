<x-app-layout>
    <x-slot name="header">
        <x-form.button-back href="{{ route('para_clinic.xray.index') }}"/>
    </x-slot>
    <x-slot name="js">
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('[name="type"]').change(function () {
                    $_this = $(this);
                    $_option_selected = $(this).find('option:selected');
                    $_amount = $_option_selected.data('price');
                    
                    $('#amount_label').html($_amount);
                    $('[name="amount"]').val($_amount);
                });
            });
            $('.btn-submit').click( function (){
                $('[name="status"]').val($(this).val());
            });
        </script>
    </x-slot>
    <form action="{{ route('para_clinic.xray.update', $row) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="hidden" name="status" value="{{ $row->status ?: 1 }}" />
        <x-card bodyClass="pb-0">
            <x-slot name="action">
                <div>
                    <x-form.button type="submit" class="btn-submit" value="2" color="success" icon="bx bx-check" label="Complete" />
                    <x-form.button type="submit" class="btn-submit" value="1" icon="bx bx-save" label="Save" />
                </div>
            </x-slot>
            <x-slot name="footer">
                <div>
                    <x-form.button type="submit" class="btn-submit" value="2" color="success" icon="bx bx-check" label="Complete" />
                    <x-form.button type="submit" class="btn-submit" value="1" icon="bx bx-save" label="Save" />
                </div>
            </x-slot>
            <table class="table-form striped">
                <tr>
                    <th colspan="4" class="text-left tw-bg-gray-100">X-Ray Code #{{ $row->code }}</th>
                </tr>
                <x-para-clinic.form-header :row="$row" :type="$type" :patient="$patient" :doctor="$doctor" :paymentType="$payment_type"
                    :isEdit="$is_edit" />
            </table>
            <br>
            <table class="table-form striped">
                <tr>
                    <th colspan="4" class="text-left tw-bg-gray-100">Result</th>
                </tr>
                @includeFirst(['xray_type.extra_form.' . $row->type_id, 'xray_type.extra_form.0'])
            </table>
        </x-card>
    </form>

</x-app-layout>