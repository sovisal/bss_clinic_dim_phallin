<tr>
	<td width="30%" class="text-right">{{ __('form.echography.baby_count') }}</td>
	<td>
		<x-bss-form.input name="baby_count" :value="old('baby_count', !empty($row) && $row->baby_count ? $row->baby_count : '1 និង មានថង់ទឹកកូន 1')"/>
	</td>
</tr>
<tr>
	<td width="30%" class="text-right">{{ __('form.echography.baby_health') }}</td>
	<td>
		<x-bss-form.input name="baby_health" :value="old('baby_health', !empty($row) && $row->baby_health ? $row->baby_health : '')"/>
	</td>
</tr>
<tr>
	<td class="text-right">{{ __('form.echography.heart_rate') }}</td>
	<td>
		<div class="row">
			<div class="col-sm-4">
				<x-bss-form.input name="heart_rate" class="is_number" :value="old('heart_rate', !empty($row) && $row->heart_rate ? $row->heart_rate : '')"/>
			</div>
			<div class="col-sm-4 pl-0">
				<x-bss-form.select name="heart_rate_unit">
					<option value="ដង/នាទី" {{ ((old('heart_rate_unit', $row->heart_rate_unit) == 'ដង/នាទី')? 'selected' : '') }}>ដង/នាទី</option>
					<option value="-" {{ ((old('heart_rate_unit', $row->heart_rate_unit) == '-')? 'selected' : '') }}>-</option>
				</x-bss-form.select>
			</div>
		</div>
	</td>
</tr>
<tr>
	<td width="30%" class="text-right">{{ __('form.echography.amniotic_fluid_quantity') }}</td>
	<td>
		<x-bss-form.select name="amniotic_fluid_quantity">
			<option value="ធម្មតា" {{ ((old('amniotic_fluid_quantity', $row->amniotic_fluid_quantity) == 'ធម្មតា')? 'selected' : '') }}>ធម្មតា</option>
			<option value="ច្រើន" {{ ((old('amniotic_fluid_quantity', $row->amniotic_fluid_quantity) == 'ច្រើន')? 'selected' : '') }}>ច្រើន</option>
			<option value="តិច" {{ ((old('amniotic_fluid_quantity', $row->amniotic_fluid_quantity) == 'តិច')? 'selected' : '') }}>តិច</option>
			<option value="-" {{ ((old('amniotic_fluid_quantity', $row->amniotic_fluid_quantity) == '-')? 'selected' : '') }}>-</option>
		</x-bss-form.select>
	</td>
</tr>
<tr>
	<td class="text-right">{{ __('form.echography.gs') }}</td>
	<td>
		<div class="row">
			<div class="col-sm-4">
				<x-bss-form.input name="gs" class="is_number" :value="old('gs', !empty($row) && $row->gs ? $row->gs : '')"/>
			</div>
			<div class="col-sm-4 pl-0">
				<x-bss-form.select name="gs_unit">
					<option value="mm" {{ ((old('gs_unit', $row->gs_unit) == 'មម')? 'selected' : '') }}>មម</option>
					<option value="-" {{ ((old('gs_unit', $row->gs_unit) == '-')? 'selected' : '') }}>-</option>
				</x-bss-form.select>
			</div>
		</div>
	</td>
</tr>
<tr>
	<td class="text-right">{{ __('form.echography.crl') }}</td>
	<td>
		<div class="row">
			<div class="col-sm-4">
				<x-bss-form.input name="crl" class="is_number" :value="old('crl', !empty($row) && $row->crl ? $row->crl : '')"/>
			</div>
			<div class="col-sm-4 pl-0">
				<x-bss-form.select name="crl_unit">
					<option value="mm" {{ ((old('crl_unit', $row->crl_unit) == 'មម')? 'selected' : '') }}>មម</option>
					<option value="-" {{ ((old('crl_unit', $row->crl_unit) == '-')? 'selected' : '') }}>-</option>
				</x-bss-form.select>
			</div>
		</div>
	</td>
</tr>
<tr>
	<td class="text-right">{{ __('form.echography.pregnancy_age1') }}</td>
	<td>
		<div class="row">
			<div class="col-sm-4">
				<x-bss-form.input name="pregnancy_age1" class="is_number" :value="old('pregnancy_age1', !empty($row) && $row->pregnancy_age1 ? $row->pregnancy_age1 : '')"/>
			</div>
			<div class="col-sm-4 pl-0">
				<x-bss-form.select name="pregnancy_age1_unit">
					<option value="សប្ដាហ៍" {{ ((old('pregnancy_age1_unit', $row->pregnancy_age1_unit) == 'សប្ដាហ៍')? 'selected' : '') }}>សប្ដាហ៍</option>
					<option value="-" {{ ((old('pregnancy_age1_unit', $row->pregnancy_age1_unit) == '-')? 'selected' : '') }}>-</option>
				</x-bss-form.select>
			</div>
		</div>
	</td>
</tr>
<tr>
	<td class="text-right">{{ __('form.echography.pregnancy_age2') }}</td>
	<td>
		<div class="row">
			<div class="col-sm-4">
				<x-bss-form.input name="pregnancy_age2" class="is_number" :value="old('pregnancy_age2', !empty($row) && $row->pregnancy_age2 ? $row->pregnancy_age2 : '')"/>
			</div>
			<div class="col-sm-4 pl-0">
				<x-bss-form.select name="pregnancy_age2_unit">
					<option value="ថ្ងៃ" {{ ((old('pregnancy_age2_unit', $row->pregnancy_age2_unit) == 'ថ្ងៃ')? 'selected' : '') }}>ថ្ងៃ</option>
					<option value="-" {{ ((old('pregnancy_age2_unit', $row->pregnancy_age2_unit) == '-')? 'selected' : '') }}>-</option>
				</x-bss-form.select>
			</div>
		</div>
	</td>
</tr>
<tr>
	<td width="30%" class="text-right">{{ __('form.echography.bady_date_of_birth') }}</td>
	<td>
		<x-bss-form.input name="bady_date_of_birth" class="date-picker" hasIcon="right" icon="bx bx-calendar" :value="old('bady_date_of_birth', !empty($row) && $row->bady_date_of_birth ? $row->bady_date_of_birth : '')"/>
	</td>
</tr>
<tr>
	<td width="30%" class="text-right">{{ __('form.echography.next_meeting') }}</td>
	<td>
		<x-bss-form.input name="next_meeting" class="date-picker" hasIcon="right" icon="bx bx-calendar" :value="old('next_meeting', !empty($row) && $row->next_meeting ? $row->next_meeting : '')"/>
	</td>
</tr>
{{-- <tr>
	<td width="30%" class="text-right">HR ចង្វាក់បេះដូង</td>
	<td>
		<x-bss-form.input name="hr_heart_rate" :value="old('hr_heart_rate', !empty($row) && $row->hr_heart_rate ? $row->hr_heart_rate : '')"/>
	</td>
</tr> --}}
{{-- <tr>
	<td width="30%" class="text-right">VO</td>
	<td>
		<x-bss-form.input name="vo" :value="old('vo', !empty($row) && $row->vo ? $row->vo : '')"/>
	</td>
</tr> --}}
{{-- <tr>
	<td width="30%" class="text-right">ចង្វាក់បេះដូង</td>
	<td>
		<x-bss-form.input name="heart_rate" :value="old('heart_rate', !empty($row) && $row->heart_rate ? $row->heart_rate : '')"/>
	</td>
</tr> --}}
{{-- <tr>
	<td width="30%" class="text-right">សសៃឈាម</td>
	<td>
		<x-bss-form.input name="blood_vessels" :value="old('blood_vessels', !empty($row) && $row->blood_vessels ? $row->blood_vessels : '')"/>
	</td>
</tr>
<tr>
	<td width="30%" class="text-right">ដៃស្បូន</td>
	<td>
		<x-bss-form.input name="uterine_tube" :value="old('uterine_tube', !empty($row) && $row->uterine_tube ? $row->uterine_tube : 'ល្អ អត់មានដុំទឹក រឺដុំសាច់')"/>
	</td>
</tr> --}}
{{-- <tr>
	<td width="30%" class="text-right">ការលូតលាស់</td>
	<td>
		<x-bss-form.input name="growth" :value="old('growth', !empty($row) && $row->growth ? $row->growth : '')"/>
	</td>
</tr> --}}
{{-- <tr>
	<td class="text-right">មុន/ក្រោយ</td>
	<td>
		<div class="row">
			<div class="col-sm-4">
				<x-bss-form.input name="before_after" class="is_number" :value="old('before_after', !empty($row) && $row->before_after ? $row->before_after : '')"/>
			</div>
			<div class="col-sm-4 pl-0">
				<x-bss-form.select name="before_after_unit">
					<option value="day" {{ ((old('before_after_unit', $row->before_after_unit) == 'ថ្ងៃ')? 'selected' : '') }}>ថ្ងៃ</option>
					<option value="-" {{ ((old('before_after_unit', $row->before_after_unit) == '-')? 'selected' : '') }}>-</option>
				</x-bss-form.select>
			</div>
		</div>
	</td>
</tr> --}}