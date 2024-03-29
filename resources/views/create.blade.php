@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="bg-secondary bg-gradient card-header text-white">{{ __('Add New Car') }}</div>
                    <div class="card-body">
                        <form class="row" method="POST" action="/create" enctype="multipart/form-data">
                            @csrf

                                <div class="row mb-3">
                                    <label for="car" class="col-md-2 col-form-label text-md-end">{{ __('Make') }}</label>
                                    <div class="col-md-3">
                                        <input id="car" type="search" class="form-control" name="car">
                                    </div>
                                    <label for="model" class="col-md-2 col-form-label text-md-end">{{ __('Model') }}</label>
                                    <div class="col-md-3">
                                        <input id="model" type="search" class="form-control" name="model">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="category" class="col-md-2 col-form-label text-md-end">{{ __('Category') }}</label>

                                    <div class="col-md-9" id="category">
                                        <div class="mb-2 hover form-check form-check-inline align-baseline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox1" name="category" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">
                                                <img src="{{asset('img/icons/sedan.png')}}" width="60px" height="25px">
                                                <span>Sedans</span>
                                            </label>
                                        </div>

                                        <div class="mb-2 hover form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox2" name="category" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">
                                                <img src="{{asset('img/icons/sport.png')}}" width="60px" height="25px">
                                                <span>Sports Car / Coupe</span>
                                            </label>
                                        </div>

                                        <div class="mb-2 hover form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox3" name="category" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">
                                                <img src="{{asset('img/icons/convertible.png')}}" width="60px" height="25px">
                                                <span>Cabriolet / Roadster</span>
                                            </label>
                                        </div>

                                        <div class="mb-2 hover form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox4" name="category" value="option4">
                                            <label class="form-check-label" for="inlineCheckbox4">
                                                <img src="{{asset('img/icons/small.png')}}" width="50px" height="25px">
                                                <span>Small Car</span>
                                            </label>
                                        </div>

                                        <div class="mb-2 hover form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox5" name="category" value="option5">
                                            <label class="form-check-label" for="inlineCheckbox5">
                                                <img src="{{asset('img/icons/suv.png')}}" width="60px" height="30px">
                                                <span>SUV / Off-road Vehicle / Pickup Truck</span>
                                            </label>
                                        </div>

                                        <div class="mb-2 hover form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox6" name="category" value="option6">
                                            <label class="form-check-label" for="inlineCheckbox6">
                                                <img src="{{asset('img/icons/van.png')}}" width="60px" height="30px">
                                                <span>VAN / Minibus</span>
                                            </label>
                                        </div>

                                        <div class="mb-2 hover form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox7" name="category" value="option7">
                                            <label class="form-check-label" for="inlineCheckbox7">
                                                <img src="{{asset('img/icons/estate.png')}}" width="60px" height="25px">
                                                <span>Estate Car</span>
                                            </label>
                                        </div>

                                        <div class="mb-2 hover form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox9" name="category" value="option9">
                                            <label class="form-check-label" for="inlineCheckbox9">Other</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="kilometers" class="col-md-2 col-form-label text-md-end">{{ __('Kilometers') }}</label>
                                    <div class="col-md-3">
                                        <input id="kilometers" type="number" class="form-control" name="kilometers">
                                    </div>

                                    <label for="year" class="col-md-2 col-form-label text-md-end">{{ __('Year') }}</label>
                                        <div class="col-md-3">
                                            <div class="dropdown">
                                                <select name="year" class="datefield year" style="padding: 10px;border:1px solid white;">
                                                    <option value="">Select year</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1949">1949</option>
                                                    <option value="1948">1948</option>
                                                    <option value="1947">1947</option>
                                                    <option value="1946">1946</option>
                                                    <option value="1945">1945</option>
                                                    <option value="1944">1944</option>
                                                    <option value="1943">1943</option>
                                                    <option value="1942">1942</option>
                                                    <option value="1941">1941</option>
                                                    <option value="1940">1940</option>
                                                    <option value="1939">1939</option>
                                                    <option value="1938">1938</option>
                                                    <option value="1937">1937</option>
                                                    <option value="1936">1936</option>
                                                    <option value="1935">1935</option>
                                                    <option value="1934">1934</option>
                                                    <option value="1933">1933</option>
                                                    <option value="1932">1932</option>
                                                    <option value="1931">1931</option>
                                                    <option value="1930">1930</option>
                                                    <option value="1929">1929</option>
                                                    <option value="1928">1928</option>
                                                    <option value="1927">1927</option>
                                                    <option value="1926">1926</option>
                                                    <option value="1925">1925</option>
                                                    <option value="1924">1924</option>
                                                    <option value="1923">1923</option>
                                                    <option value="1922">1922</option>
                                                    <option value="1921">1921</option>
                                                    <option value="1920">1920</option>
                                                    <option value="1919">1919</option>
                                                    <option value="1918">1918</option>
                                                    <option value="1917">1917</option>
                                                    <option value="1916">1916</option>
                                                    <option value="1915">1915</option>
                                                    <option value="1914">1914</option>
                                                    <option value="1913">1913</option>
                                                    <option value="1912">1912</option>
                                                    <option value="1911">1911</option>
                                                    <option value="1910">1910</option>
                                                    <option value="1909">1909</option>
                                                    <option value="1908">1908</option>
                                                    <option value="1907">1907</option>
                                                    <option value="1906">1906</option>
                                                    <option value="1905">1905</option>
                                                    <option value="1904">1904</option>
                                                    <option value="1903">1903</option>
                                                    <option value="1902">1902</option>
                                                    <option value="1901">1901</option>
                                                    <option value="1900">1900</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row mb-3 mt-2">
                                    <label for="body-color" class="col-md-2 col-form-label text-md-end">{{ __('Body Color') }}</label>
                                    <div class="col-md-9 p-2" id="body-color">

                                        <div class="mb-2 form-check form-check-inline align-baseline color-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxBlack" name="body-color" value="black">
                                            <label style="color:white;background-color: black;" class="form-check-label" for="CheckBoxBlack">Black</label>
                                        </div>

                                        <div class="mb-2 form-check form-check-inline align-baseline color-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxWhite" name="body-color" value="white">
                                            <label style="background-color: white; border: 1px solid black;" class="form-check-label" for="CheckBoxWhite">White</label>
                                        </div>

                                        <div class="mb-2 form-check form-check-inline align-baseline color-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxRed" name="body-color" value="red">
                                            <label style="color:white;background-color: red;" class="form-check-label" for="CheckBoxRed">Red</label>
                                        </div>

                                        <div class="mb-2 form-check form-check-inline align-baseline color-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxGold" name="body-color" value="gold">
                                            <label style="background-color: gold;" class="form-check-label" for="CheckBoxGold">Gold</label>
                                        </div>

                                        <div class="mb-2 form-check form-check-inline align-baseline color-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxGreen" name="body-color" value="green">
                                            <label style="color:white; background-color: green;" class="form-check-label" for="CheckBoxGreen">Green</label>
                                        </div>

                                        <div class="mb-2 form-check form-check-inline align-baseline color-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxBlue" name="body-color" value="blue">
                                            <label style="color:white; background-color: blue;" class="form-check-label" for="CheckBoxBlue">Blue</label>
                                        </div>

                                        <div class="mb-2 form-check form-check-inline align-baseline color-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxSilver" name="body-color" value="silver">
                                            <label style="background-color: silver;" class="form-check-label" for="CheckBoxSilver">Silver</label>
                                        </div>

                                        <div class="mb-2 form-check form-check-inline align-baseline color-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxBronze" name="body-color" value="bronze">
                                            <label style="background-color: sandybrown;" class="form-check-label" for="CheckBoxBronze">Bronze</label>
                                        </div>

                                        <div class="mb-2 form-check form-check-inline align-baseline color-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxOrange" name="body-color" value="orange">
                                            <label style="background-color: orange;" class="form-check-label" for="CheckBoxOrange">Orange</label>
                                        </div>

                                        <div class="mb-2 form-check form-check-inline align-baseline color-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxPurple" name="body-color" value="purple">
                                            <label style="color:white; background-color: purple;" class="form-check-label" for="CheckBoxPurple">Purple</label>
                                        </div>

                                        <div class="mb-2 form-check form-check-inline align-baseline color-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxPink" name="body-color" value="pink">
                                            <label style="background-color: pink;" class="form-check-label" for="CheckBoxPink">Pink</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fuel" class="col-md-2 col-form-label text-md-end">{{ __('Fuel type') }}</label>
                                    <div id="fuel" class="col-md-3 fuel-gear">
                                        <div class="mb-2 form-check form-check-inline align-baseline gear-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxDiesel" name="fuel" value="diesel">
                                            <label style="" class="form-check-label" for="CheckBoxDiesel">Diesel</label>
                                        </div>
                                        <div class="mb-2 form-check form-check-inline align-baseline gear-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxPetrol" name="fuel" value="petrol">
                                            <label style="" class="form-check-label" for="CheckBoxPetrol">Petrol</label>
                                        </div>
                                        <div class="mb-2 form-check form-check-inline align-baseline gear-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxHybrid-Diesel" name="fuel" value="hybrid-diesel">
                                            <label style="" class="form-check-label" for="CheckBoxHybrid-Diesel">Hybrid-Diesel</label>
                                        </div>

                                        <div class="mb-2 form-check form-check-inline align-baseline gear-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxHybrid-Petrol" name="fuel" value="hybrid-petrol">
                                            <label style="" class="form-check-label" for="CheckBoxHybrid-Petrol">Hybrid-Petrol</label>
                                        </div>
                                        <div class="mb-2 form-check form-check-inline align-baseline gear-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxElectric" name="fuel" value="electric">
                                            <label style="" class="form-check-label" for="CheckBoxElectric">Electric</label>
                                        </div>
                                        <div class="mb-2 form-check form-check-inline align-baseline gear-div">
                                            <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxLPG" name="fuel" value="lpg">
                                            <label style="" class="form-check-label" for="CheckBoxLPG">LPG</label>
                                        </div>

                                    </div>
                                        <label for="gear" class="col-md-2 col-form-label text-md-end">{{ __('Gear') }}</label>
                                        <div id="gear" class="col-md-3 fuel-gear">
                                            <div class="mb-2 form-check form-check-inline align-baseline gear-div">
                                                <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxAutomatic" name="gear" value="automatic">
                                                <label style="" class="form-check-label" for="CheckBoxAutomatic">Automatic</label>
                                            </div>
                                            <div class="mb-2 form-check form-check-inline align-baseline gear-div">
                                                <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxManual" name="gear" value="manual">
                                                <label style="" class="form-check-label" for="CheckBoxManual">Manual</label>
                                            </div>
                                            <div class="mb-2 form-check form-check-inline align-baseline gear-div">
                                                <input class="form-check-input radio-custom input-opacity" type="radio" id="CheckBoxSemi-Automatic" name="gear" value="semiautomatic">
                                                <label style="" class="form-check-label" for="CheckBoxSemi-Automatic">Semi-Automatic</label>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row mb-3">
                                    <label for="power" class="col-md-2 col-form-label text-md-end">{{ __('Power (Hp)') }}</label>
                                    <div class="col-md-3">
                                        <input id="power" type="number" class="form-control" name="power">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-md-2 col-form-label text-md-end">{{ __('Choose Image') }}</label>
                                    <div class="col-md-3">
                                        <input multiple id="image" type="file" class="form-control mb-3" name="image">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div style="display: inherit" class="col-md-10">
                                        <label class="col-md-2"></label>
                                        <div class="img-add-show" id="imageadd"></div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-2 offset-md-10">
                                        <button type="submit" class="btn btn-primary pe-5" style="padding-left: 3rem">
                                            {{ __('Create') }}
                                        </button>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
