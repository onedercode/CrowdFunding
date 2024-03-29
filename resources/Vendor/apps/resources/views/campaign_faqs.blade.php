@extends('layouts.charity.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')

    <section class="campaign-details-wrap">

        @include('single_campaign_header')

        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="campaign-decription">

                        @if($campaign->faqs->count() > 0)
                            @foreach($campaign->faqs as $faq)

                                <div class="update-wrap">
                                    <h2 class="update-title"> @lang('app.q') : {{$faq->title}} </h2>
                                    <hr />
                                    {!! nl2br($faq->description) !!}
                                </div>


                            @endforeach

                        @else
                            <div class="no-data">
                                <i class="fa fa-bell-o"></i><h1>@lang('app.no_faq')</h1>
                            </div>
                        @endif



                    </div>

                </div>

                <div class="col-md-4">
                    @include('campaign_single_sidebar')
                </div>

            </div>
        </div>


    </section>

    @include('footer_get_start_section')



@endsection

@section('page-js')

    <script>
        $(function(){
            $(document).on('click', '.donate-amount-placeholder ul li', function(e){
                $(this).closest('form').find($('[name="amount"]')).val($(this).data('value'));
            });
        });
    </script>

@endsection