@extends($master)
@section('page', trans('ticketit::lang.create-ticket-title'))

@section('content')
@include('ticketit::shared.header')
    <div class="well bs-component">
        {!! CollectiveForm::open([
                        'route'=>$setting->grab('main_route').'.store',
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                        ]) !!}
            <legend>{!! trans('ticketit::lang.create-new-ticket') !!}</legend>
            <div class="form-group">
                {!! CollectiveForm::label('subject', trans('ticketit::lang.subject') . trans('ticketit::lang.colon'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-8">
                    {!! CollectiveForm::text('subject', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <span class="help-block">{!! trans('ticketit::lang.create-ticket-brief-issue') !!}</span>
                </div>
            </div>
            <div class="form-group">
                {!! CollectiveForm::label('content', trans('ticketit::lang.description') . trans('ticketit::lang.colon'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-8">
                    {!! CollectiveForm::textarea('content', null, ['class' => 'form-control summernote-editor', 'rows' => '5', 'required' => 'required']) !!}
                    <span class="help-block">{!! trans('ticketit::lang.create-ticket-describe-issue') !!}</span>
                </div>
            </div>
            <div class="form-group">
                {!! CollectiveForm::label('priority', trans('ticketit::lang.priority') . trans('ticketit::lang.colon'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-2">
                    {!! CollectiveForm::select('priority_id', $priorities, null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! CollectiveForm::label('category', trans('ticketit::lang.category') . trans('ticketit::lang.colon'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-2">
                        {!! CollectiveForm::select('category_id', $categories, null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                {!! CollectiveForm::hidden('agent_id', 'auto') !!}
             </div>
            <br>
            <div class="form-group">
                <div class="col-lg-2">
                    {!! link_to_route($setting->grab('main_route').'.index', trans('ticketit::lang.btn-back'), null, ['class' => 'btn btn-default col-md-6 ta-center pull-left']) !!}
                </div>
                <div class="col-lg-2">
                    {!! CollectiveForm::submit(trans('ticketit::lang.btn-submit'), ['class' => 'btn btn-success col-md-12']) !!}
                </div>
            </div>
        {!! CollectiveForm::close() !!}
    </div>
@endsection

@section('footer')
    @include('ticketit::tickets.partials.summernote')
@append
