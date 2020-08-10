@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-1 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            @foreach( $pluck_level_range as $key => $pluck_level_range_value_tablist )
                <a
                    class="{{ ($key == 0 ? "nav-link active" : 'nav-link') }}"
                    id={{ "v-pills-".$pluck_level_range_value_tablist."-tab" }}
                        data-toggle="pill"
                    href={{ "#v-pills-".$pluck_level_range_value_tablist }}
                    role="tab"
                    aria-controls={{ "v-pills-".$pluck_level_range_value_tablist }}
                    aria-selected={{$key == 0 ? 'true' : 'false'}}
                >
                    {{ str_replace("_"," - ",$pluck_level_range_value_tablist) }}
                </a>
            @endforeach
        </div>
        <div class="col-11 tab-content" id="v-pills-tabContent">
            @foreach( $pluck_level_range as $pluck_level_range_key => $pluck_level_range_tabcontent )
                <div class="{{ "tab-pane fade ".($pluck_level_range_key==0? 'active show' : '') }}" id={{ "v-pills-".$pluck_level_range_tabcontent }} role="tabpanel" aria-labelledby={{ "v-pills-".$pluck_level_range_tabcontent."-tab" }}>
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th scope="col">{{ "Level" }}</th>
                        <th scope="col">{{ "Quest Name" }}</th>
                        <th scope="col">{{ "NPC" }}</th>
                        <th scope="col">{{ "Coordinate" }}</th>
                        <th scope="col">{{ "Prerequisites" }}</th>
                    </tr>
                    </thead>
                @foreach($returnofwarrior as $returnofwarrior_key => $returnofwarrior_value)
                    @if($pluck_level_range_tabcontent === $returnofwarrior_value->level_range)
                        <tbody>
                            <tr>
                                <th scope="row">
                                    {{ $returnofwarrior_value->level }}
                                </th>
                                <td>{{ $returnofwarrior_value->quest_name }}</td>
                                <td>{{ $returnofwarrior_value->npc }}</td>
                                <td>{{ $returnofwarrior_value->coordinate }}</td>
                                <td>{{ $returnofwarrior_value->prerequisites }}</td>
                            </tr>
                        </tbody>
                    @else
                        @continue
                    @endif
                @endforeach
                </table>
                </div>
            @endforeach
        </div>
    </div>

@stop
