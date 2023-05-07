<ul class="fm_image_list">
    @foreach ($images as $item)
        <li class="admin_image_individual_body">
            <div class="image_body">
                <input type="checkbox" data-name="{{ $item->name }}" value="{{ $item->id }}" class="form-control fm_checkbox">
                <div class="controls">
                    <i class="icon-options-vertical icons"></i>
                    <ul>
                        <li><a href="#"><i class="icon-magnifier icons"></i> View</a></li>
                        <li><a href="{{ route('image.destroy',$item->id) }}" class="delete_btn" data-parent=".admin_image_individual_body"><i class="icon-trash icons"></i> Delete</a></li>
                    </ul>
                </div>
                <img src="/{{ $item->name }}" alt="product image">
            </div>
        </li>
    @endforeach
</ul>
