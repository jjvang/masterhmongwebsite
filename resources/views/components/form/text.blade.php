<!-- resources/views/components/form/text.blade.php -->
<div class="form-group">
    {{ Form::label($name) }}
    {{ Form::text($name, $value, $attributes)) }}
</div>
