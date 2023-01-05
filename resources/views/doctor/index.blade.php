<x-app-layout>
    <x-slot name="header">
        @can('CreateDoctor')
        <x-form.button href="{{ route('setting.doctor.create') }}" icon="bx bx-plus" label="Create" />
        @endcan
    </x-slot>
    <x-card :foot="false" :head="false">
        <x-table class="table-hover table-striped" id="datatables">
            <x-slot name="thead">
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>User</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </x-slot>
            @foreach($doctors as $doctor)
            <tr>
                <td>
                    DT-{!! str_pad($doctor->id, 6, '0', STR_PAD_LEFT) !!}
                </td>
                <td>{{ d_obj($doctor, ['name_en', 'name_kh']) }}</td>
                <td>{{ d_text(getParentDataByType('gender', $doctor->gender_id)) }}</td>
                <td>{{ d_text($doctor->phone) }}</td>
                <td>{{ d_text($doctor->email) }}</td>
                <td>{{ d_obj($doctor, 'address', ['village_kh', 'commune_kh', 'district_kh', 'province_kh']) }}</td>
                <td>{{ d_obj($doctor, 'user', 'name') }}</td>
                <td>{!! d_status($doctor->status) !!}</td>
                <td>
                    <x-table-action-btn
                        module="setting.doctor"
                        module-ability="Doctor"
                        :id="$doctor->id"
                        :is-trashed="$doctor->trashed()"
                        :disable-edit="$doctor->trashed()"
                        :show-btn-show="false"
                    />
                </td>
            </tr>
            @endforeach
        </x-table>
    </x-card>
    <x-modal-confirm-delete />
</x-app-layout>
