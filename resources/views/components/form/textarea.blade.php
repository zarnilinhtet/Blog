  @props(['name', 'value' => ''])
  <x-form.input-wrapper>

      <x-form.label :name="$name" />
      <textarea name="{{ $name }}" id="" cols="20" rows="4" class="form-control editor">
        {!! old($name, $value) !!}</textarea>
      <x-error :name="$name" />

  </x-form.input-wrapper>
