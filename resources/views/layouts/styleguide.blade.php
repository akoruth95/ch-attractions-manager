
@extends('layouts.master')

@section('content')
<div>
<div class="row"><div class="col-md-6 col-md-offset-6"><h1>Styles</h1></div></div>
<div class="styleguide">
  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      <h1>Colors</h1>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <label class="color-blue-1">

        </label>
        <label class="color-blue-2">

        </label>
        <label class="color-blue-3">

        </label>
        <label class="color-blue-4">

        </label>
     </div>
   </div>
   <div class="row">
      <div class="col-md-4 col-md-offset-2">

      </div>
      <div class="col-md-3 col-md-offset-1">
        <label id="color-gray-1">

        </label>
        <label class="color-gray-2">

        </label>
      </div>
    </div>
  </div>

  <div class="styleguide">
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <h1>Typography</h1>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2 id="typography-light">Helvetica Neue light</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-2">

      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2 id="typography-regular">Helvetica Neue regular</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-2">

      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2 id="typography-bold">Helvetica Neue bold</h2>
      </div>
    </div>
  </div>

  <div class="styleguide">
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <h1>H1</h1>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h1 id="header-1">A Very Large Header</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <h2>H2</h2>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2 id="header-2">Another Large Header</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <h3>H3</h3>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h3 id="header-3">This is a medium Header</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <h4>H4</h4>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h4 id="header-4">This is a moderate Header</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <h5>H5</h5>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h5 id="header-5">This is a small Header</h5>
      </div>
    </div>
  </div>

  <div class="styleguide">
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <p class="plight">paragraph light</p>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <p class="plight">I’m no idealist to believe firmly in the integrity of our courts and in the jury system - that is no ideal to me, it is a living, working reality.
          Gentlemen, a court is no better than each man of you sitting before me in this jury, and a jury is only as sound as the men who make it up.
          I am confident that you gentlemen will review without passion the evidence you have heard, come to a decision, and restore
          this defendant to his family. In the name of God, do your duty. In the name of God, believe him.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-2">
          <p class="pnormal">paragraph</p>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <p class="pnormal">I’m no idealist to believe firmly in the integrity of our courts and in the jury system - that is no ideal to me, it is a living, working reality.
            Gentlemen, a court is no better than each man of you sitting before me in this jury, and a jury is only as sound as the men who make it up.
            I am confident that you gentlemen will review without passion the evidence you have heard, come to a decision, and restore
            this defendant to his family. In the name of God, do your duty. In the name of God, believe him.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-2">
            <p class="plead">paragraph</p>
          </div>
          <div class="col-md-3 col-md-offset-1">
            <p class="plead">I’m no idealist to believe firmly in the integrity of our courts and in the jury system - that is no ideal to me, it is a living, working reality.
              Gentlemen, a court is no better than each man of you sitting before me in this jury, and a jury is only as sound as the men who make it up.
              I am confident that you gentlemen will review without passion the evidence you have heard, come to a decision, and restore
              this defendant to his family. In the name of God, do your duty. In the name of God, believe him.</p>
            </div>
          </div>
        </div>

        <div class="styleguide">
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <h1>Button Large</h1>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <button type="button" id="stylebutton-large" class="btn btn-primary btn-lg">Large</button>
            </div>
          </div>
          <br  />
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <h3>Button Medium</h3>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <button type="button" id="stylebutton-medium" class="btn btn-success btn-lg">Medium</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <h5>Button Small</h5>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <button type="button" id="stylebutton-small" class="btn btn-danger btn-md">Small</button>
            </div>
          </div>
        </div>

        <div class="styleguide">
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <h1>Input</h1>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <input class="form-control" type="text"/>
              <br />
              <select class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <br />
              <textarea class="form-control"></textarea>
            </div>
          </div>
        </div>

        <div class="styleguide">
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <h1>Unordered List</h1>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <ul>
                <li class="styledlist">
                  <div class="panel panel-primary">
                    <div class="panel-body">This is a list item</div>
                  </div>
                </li>
                <li class="styledlist">
                  <div class="panel panel-primary">
                    <div class="panel-body">This is a list item</div>
                  </div>
                </li>
                <li class="styledlist">
                  <div class="panel panel-primary">
                    <div class="panel-body ">This is a list item</div>
                  </div>
                </li>
              </ul>

            </div>
          </div>
        </div>

        <div class="styleguide">
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <h1>Ordered List</h1>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <ol class="styledlist">
                <li id="orderedItem1">
                  <div class="panel panel-primary">
                    <div class="panel-body">This is a list item</div>
                  </div>
                </li>
                <li id="orderedItem2">
                  <div class="panel panel-primary">
                    <div class="panel-body">This is a list item</div>
                  </div>
                </li>
                <li id="orderedItem3">
                  <div class="panel panel-primary">
                    <div class="panel-body ">This is a list item</div>
                  </div>
                </li>
              </ol>

            </div>
          </div>
        </div>

@endsection
