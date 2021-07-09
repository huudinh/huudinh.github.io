const components = {};

components.postSong = `
    <div class="msPostSong">
        <div class="msPostSongTitle"><i class="icon-edit"></i>ĐĂNG BÀI HÁT MỚI</div>
        <div class="msPostSongForm">
            <form id="songForm">
                <div class="msPostSong__row">
                    <div class="msPostSong__col">
                        <label>Tên bài <span>*</span></label> 
                        <input name="name" type="text" placeholder="Ví dụ: Cát Bụi">
                        <label>Ca sĩ/Ban nhạc <span>*</span></label> 
                        <input name="singer" type="text" placeholder="Ví dụ: Cẩm Ly, Đan Trường">
                    </div>
                    <div class="msPostSong__col">
                        <label>Thể loại <span>*</span></label> 
                        <input name="genre" type="text" placeholder="Ví dụ: Nhạc Vàng">
                        <label>Tác giả </label> 
                        <input name="author" type="text" placeholder="Ví dụ: Trịnh Công Sơn">
                    </div>
                </div>
                <label>Link bài hát <span>*</span></label> 
                <input name="url" type="text" placeholder="Link youtube">
                <label>Lời bài hát</label> 
                <textarea name="lyrics" rows="10" cols="10"></textarea>
                <button type="submit">Đăng bài hát</button>
            </form>
        </div>
    </div>
`;

components.topSong = `
    <div class="msSection">
        <div class="msSectionTitle">
            Top 100 bài hát đề cử
        </div>
        <div class="msSectionList">
            <table>
                <tbody id="listSong">
                </tbody>
            </table>
        </div>
    </div>
`;

// Main App
components.main = `
    <div class="sbLeft">
        <div class="sbLeftLogo">
            <i class="icon-headphones"></i><span>sci Music</span>
        </div>
        <div class="sbLeftType">
            <div class="sbLeftType__title"><i class="icon-music-1"></i>Thể loại</div>
            <ul>
                <li><a href="#">Trữ Tình</a></li>
                <li><a href="#">Pop</a></li>
                <li><a href="#">Pop</a></li>
                <li><a href="#">Rock</a></li>
                <li><a href="#">Nhạc Trẻ</a></li>
                <li><a href="#">Nhạc Sàn</a></li>
                <li><a href="#">DJ</a></li>
            </ul>
        </div>
        
        <div class="sbLeftType sbLeftType-bg">
            <div class="sbLeftType__title"><i class="icon-cog"></i>Tiện ích</div>
            <ul>
                <li><a id="btnPost">Đăng bài hát</a></li>
                <li><a href="#">Yêu cầu bài hát</a></li>
                <li><a href="#">Góp ý</a></li>
            </ul>
        </div>
    </div>
    <div class="sbRight">
        <div class="sbRightRegist">
            <div id="login"></div>
            
            <div class="sbRightRegist__say">
                "Âm nhạc là sự sống. Đó là lý do trái tim ta có nhịp đập."<br>
                <i>𑁋 Louis Armstrong</i>
            </div>
            <div class="sbRightHeart" id="heartbeat">
                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-soundwave" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z"></path>
                </svg>
                <i class="icon-heart-1"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-soundwave" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z"></path>
                </svg>
            </div>
        
        </div>
        <div class="sbRightRegist__title"><i class="icon-folder-open"></i>Quảng cáo</div>
        <div class="sbRightAdv">
            <a href="#">
                <img src="images/bang-nhac.jpg" alt="">
            </a>
        </div>

    </div>  
    <div class="ms">
        <div class="msMain">
            <div class="msHead">
                <div class="msHeadSearch">
                    <i class="icon-search-1"></i>
                    <input placeholder="Nhập tên bài hát, nghệ sĩ">
                </div>
            </div>

            <div id="postSong"></div>
            <div id="topSong"></div>
            
            <div class="msFooter">
                Powere by <b>Code Team Sale & MKT</b> <br>
                © 2021 SCI Music. All rights reserved
            </div>
        </div>
    </div>
`;

// Form 
components.formInfo = `
    <div class="sbRightRegist__form" id="formIntro">
        <div class="sbRightRegist__title"><i class=" icon-music-1"></i>THƯ VIỆN CỦA TÔI</div>
        <div class="sbRightRegist__note">
            Hãy đăng nhập hoặc tạo tài khoản để lưu danh sách yêu thích của chính bạn!
        </div>
        <div class="sbRightRegist__button">
            <button class="sbRightRegist__login" id="login-button">Đăng nhập</button>
            <button class="sbRightRegist__regist" id="regist-button">Đăng ký</button>
        </div>
    </div>
`;

components.formRegist = `
    <form class="sbRightRegist__form" id="formRegist">
        <div class="sbRightRegist__title"><i class="icon-edit-1"></i>Đăng ký</div>
        <div class="sbRightRegist__input">
            <input name="name" type="text" placeholder="Họ Tên:">
            <input name="email" type="text" placeholder="Email:">
            <input name="password" type="password" placeholder="Mật khẩu:">
            <input name="repassword" type="password" placeholder="Nhập lại mật khẩu:">
        </div>
        <div class="sbRightRegist__button">
            <button class="sbRightRegist__login">Đăng ký</button>
            <p class="sbRightRegist__note">Chuyển sang đăng nhập <a id="login-text" href="#">tại đây</a></p>
        </div>
    </form>
`;

components.formLogin = `
    <div class="sbRightRegist__form" id="formLogin">
        <div class="sbRightRegist__title"><i class="icon-login"></i>Đăng nhập</div>
        <div class="sbRightRegist__input">
            <input type="text" placeholder="Email">
            <input type="password" placeholder="Password">
        </div>
        <div class="sbRightRegist__button">
            <button class="sbRightRegist__login">Đăng nhập</button>
            <p class="sbRightRegist__note">Chuyển sang đăng ký <a id="regist-text" href="#">tại đây</a></p>
        </div>
    </div>
`;