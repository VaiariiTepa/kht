

{!! Form::open(['url' => 'categories']) !!}

    <input type="text" name="nom" placeholder='nom'/>
    <select name="categorie">

        <?php

        @foreach (categories::all() as $categorie)
       // <option value="'.{{ categorie->id }}.'" >'.{{categorie->nom}}.'</option>
        echo $categorie->id;

        @endforeach
        ?>
    </select>
    <input type="submit" value="valider"/>

    {!! Form::close() !!}