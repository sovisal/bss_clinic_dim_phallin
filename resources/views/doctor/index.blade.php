<x-app-layout>
    <x-slot name="header">
        <x-form.button href="{{ route('setting.doctor.create') }}" icon="bx bx-plus" label="Create" />
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
                <td class="text-center">
                    DT-{!! str_pad($doctor->id, 6, '0', STR_PAD_LEFT) !!}
                </td>
                <td>{{ d_obj($doctor, ['name_en', 'name_kh']) }}</td>
                <td>{{ d_text(getParentDataByType('gender', $doctor->gender_id)) }}</td>
                <td>{{ d_text($doctor->phone) }}</td>
                <td>{{ d_text($doctor->email) }}</td>
                <td>{{ d_obj($doctor, 'address', ['village_kh', 'commune_kh', 'district_kh', 'province_kh'] ) }}</td>
                <td>{{ d_obj($doctor, 'user', 'name') }}</td>
                <td>{{ d_status($doctor->status) }}</td>

                <td class="text-center">
                    @can('UpdateDoctor')
                    <x-form.button color="secondary" class="btn-sm" href="{{ route('setting.doctor.edit', $doctor->id) }}" icon="bx bx-edit-alt" />
                    @endcan
                    @can('DeleteDoctor')
                    <x-form.button color="danger" class="confirmDelete btn-sm" data-id="{{ $doctor->id }}" icon="bx bx-trash" />
                    <form class="sr-only" id="form-delete-{{ $doctor->id }}" action="{{ route('setting.doctor.delete', $doctor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="sr-only" id="btn-{{ $doctor->id }}">Delete</button>
                    </form>
                    @endcan
                </td>
            </tr>
            @endforeach
        </x-table>
    </x-card>
    <x-modal-confirm-delete />
</x-app-layout>
