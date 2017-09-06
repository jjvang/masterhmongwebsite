<!-- resources/views/components/form/text.blade.php -->
<div class="form-group">
    {{ Form::label($name) }}
    {{ Form::textarea($name, $value, $attributes)) }}
</div>
