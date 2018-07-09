<li class="{{ Request::is('penyakits*') ? 'active' : '' }}">
    <a href="{!! route('penyakits.index') !!}"><i class="fa fa-edit"></i><span>Penyakits</span></a>
</li>

<li class="{{ Request::is('gejalas*') ? 'active' : '' }}">
    <a href="{!! route('gejalas.index') !!}"><i class="fa fa-edit"></i><span>Gejalas</span></a>
</li>

<li class="{{ Request::is('cfs*') ? 'active' : '' }}">
    <a href="{!! route('cfs.index') !!}"><i class="fa fa-edit"></i><span>Cfs</span></a>
</li>

