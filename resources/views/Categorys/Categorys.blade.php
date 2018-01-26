<ul>
    @foreach ($categorys as $category)
        <li>Nom : {{ $category->name }} <a @php echo 'href="'.action('CategoryController@editCategory', ['CategoryId' => $category->id]).'"'; @endphp>Editer</a></li>
    @endforeach
</ul>