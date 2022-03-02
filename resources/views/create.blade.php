@extends('layouts.app')

@section('content')
    <div class="container mt-3 mb-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add New Car') }}</div>
                    <div class="card-body">
                        <form class="row" method="POST" action="/create" enctype="multipart/form-data">
                            @csrf
                                <div class="row mb-3">
                                    <label for="car" class="col-md-2 col-form-label text-md-end">{{ __('Make') }}</label>
                                    <div class="col-md-3">
                                        <input id="car" type="text" class="form-control" name="car">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="model" class="col-md-2 col-form-label text-md-end">{{ __('Model') }}</label>
                                    <div class="col-md-3">
                                        <input id="model" type="text" class="form-control" name="model">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="year" class="col-md-2 col-form-label text-md-end">{{ __('Year') }}</label>
                                    <div class="col-md-3">
                                        <div class="dropdown">
                                            <select name="year" class="datefield year" style="padding: 10px;border:1px solid white;">
                                                <option value="">Year</option>
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
                                <div class="row mb-3">
                                    <label for="year" class="col-md-2 col-form-label text-md-end">{{ __('Category') }}</label>
                                    <div class="col-md-9">
                                        <div class="mb-2 form-check form-check-inline align-baseline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox1" name="category" value="option1">
                                            <img src="{{asset('img/sedan.png')}}" width="65px" height="30px">
                                            <span >Sedans</span>
                                        </div>
                                        <div class="mb-2 form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox2" name="category" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Sports Car / Coupe</label>
                                        </div>
                                        <div class="mb-2 form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox3" name="category" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Cabriolet / Roadster</label>
                                        </div>
                                        <div class="mb-2 form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox4" name="category" value="option4">
                                            <label class="form-check-label" for="inlineCheckbox4">SUV / Off-road Vehicle / Pickup Truck</label>
                                        </div>
                                        <div class="mb-2 form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox5" name="category" value="option5">
                                            <label class="form-check-label" for="inlineCheckbox5">Small Car</label>
                                        </div>
                                        <div class="mb-2 form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox6" name="category" value="option6">
                                            <label class="form-check-label" for="inlineCheckbox6">Van / Minibus</label>
                                        </div>
                                        <div class="mb-2 form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox7" name="category" value="option7">
                                            <label class="form-check-label" for="inlineCheckbox7">Estate Car</label>
                                        </div>
                                        <div class="mb-2 form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox8" name="category" value="option8">
                                            <label class="form-check-label" for="inlineCheckbox8">Other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="fuel" class="col-md-2 col-form-label text-md-end">{{ __('Fuel type') }}</label>
                                    <div class="col-md-3">
                                        <select name="fuel" style="padding: 10px;border:1px solid white;">
                                            <option value="">Select fuel type</option>
                                            <option value="Diesel">Diesel</option>
                                            <option value="Petrol">Petrol</option>
                                            <option value="Hybrid-Diesel">Hybrid-Diesel</option>
                                            <option value="Hybrid-Petrol">Hybrid-Petrol</option>
                                            <option value="Electric">Electric</option>
                                            <option value="LPG">LPG</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gear" class="col-md-2 col-form-label text-md-end">{{ __('Gear') }}</label>
                                    <div class="col-md-3">
                                        <select name="fuel" style="padding: 10px;border:1px solid white;">
                                            <option value="">Select gear type</option>
                                            <option value="Automatic">Automatic</option>
                                            <option value="Manual">Manual</option>
                                            <option value="Semi-Automatic">Semi-Automatic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="image" class="col-md-2 col-form-label text-md-end">{{ __('Choose Image') }}</label>
                                    <div class="col-md-3">
                                        <input id="image" type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-6">
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
