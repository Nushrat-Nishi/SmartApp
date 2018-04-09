@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus blanditiis, cumque cupiditate dolore fuga ipsa iure maxime neque quasi tempora tempore temporibus veritatis, voluptas. Distinctio eligendi illum magni molestiae quisquam.</span><span>Ab, accusantium consequuntur corporis cumque cupiditate dolor dolores earum, est fuga illo impedit ipsa ipsam magni maiores mollitia nihil numquam odit perspiciatis quae quod quos repellat reprehenderit sequi, sunt temporibus.</span><span>Dignissimos error ex exercitationem id modi perspiciatis repudiandae! Deleniti ea, eveniet ipsum magni nam quidem reprehenderit suscipit ullam? Debitis fugit illum nostrum numquam quae qui tenetur. Doloribus laborum neque voluptas!</span><span>Animi eligendi enim et nesciunt odio similique voluptate voluptatum! Aliquam, commodi debitis deserunt dicta dolorem maxime nobis quae, quidem quo sint tempore tenetur. Ad dignissimos distinctio esse ipsa iste possimus!</span><span>Aperiam commodi consequuntur cum cumque eaque, et laudantium libero magni neque non quasi quisquam quo repellendus sed similique? Aperiam beatae delectus, facere harum iure numquam velit. Cum expedita id nesciunt?</span></p>
@endsection


@section('sidebar')
    @parent
    <p>This is append to the sidebar.</p>
@endsection