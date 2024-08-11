<div class="dsn-service d-grid grid-lg-3 grid-sm-2" data-dsn-iconsize="80px">
    @foreach ($services as $service)
        <div class="dsn-up service-item p-relative grid-item style-box">
            <div class="service-item-inner border-style number-item h-100">
                <div class="dsn-icon">
                    <img style="width: 80px; height:80px;" src="{{ Storage::url($service->cover) }}"
                        alt="{{ $service->title }}">
                </div>
                <div class="service-content p-relative">
                    <h4 class="service_title title-block">{{ $service->title }}</h4>
                    <div class="service_description mt-10 max-w570 dsn-auto">
                        <p>{{ $service->short_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div style="border-top: 0px !important" class="type-p-nav">
    <div class="dsn-pagination p-relative d-flex align-items-center">
        {{ $services->links('front.pagination.custom-pagination') }}
    </div>
</div>
