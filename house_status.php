<!DOCTYPE html>
<html lang="en">
<head>
    <title>驗證房屋</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The Estate Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/listings_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/listings_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <!-- jquery連結 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- datatable連結 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <!-- 自定義CSS -->
    <style>
        /* 表格背景和文字顏色 */
        #myTable {
            background-color: #A1A8C6;
            color: white;
        }

        #myTable th,
        #myTable td {
            background-color: #A1A8C6;
            color: white;
            text-align: center;
        }

        #myTable thead th {
            background-color: #6B728E;
        }
    </style>
</head>
<body>






<header class="header trans_300">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="header_container d-flex flex-row align-items-center trans_300">
					<div class="logo_container">
						<a href="#">
							<div class="logo">
								<img src="images/logo_fju.jpg" alt="" style="width: 65px; height: 65px;margin-right: 10px;">
								<span>輔仁大學租屋網</span>
							</div>
						</a>
					</div>
					<nav class="main_nav">
                        <ul class="main_nav_list">
                            <li class="main_nav_item"><a href="account_status_lan.php">房東帳號</a></li>
                            <li class="main_nav_item"><a href="account_status_te.php">房客帳號</a></li>
                            <li class="main_nav_item"><a href="house_status.php">驗證房屋</a></li>
                            <li class="main_nav_item"><a href="post_status.php">驗證發文</a></li>
                            <li class="main_nav_item"><a href="logout.php">登出</a></li>
                        </ul>
                    </nav>
					<div class="hamburger_container menu_mm">
						<div class="hamburger menu_mm">
							<i class="fas fa-bars trans_200 menu_mm"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="super_container"></div>
<div class="home1">
	<div class="hello" style="color: #555e81;"></div>
</div>

<div class="container" >
	<div class="row">
		<div class="col">
			<div class="home_content">
			</div>
		</div>
	</div>
</div>





















<div class="row">
            <div class="col">
                <h1 style="color: #555e81;text-align: center;"><b>驗證房屋</b></h1>
            </div>

        </div>
    </div>
    <hr>
<div style="width:80%; margin: 0 auto;">
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>房屋編號</th>
                <th>土地持有權狀</th>
                <th>出租證明</th>
                <th>房屋地址</th>
                <th>房東帳號</th>
                <th>狀態</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php
                session_start();
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sa";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("連接失敗: " . $conn->connect_error);
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $vid = $_POST["vid"];
                    $sql = "UPDATE verify SET status='approved' WHERE vid='$vid'";
                    if ($conn->query($sql) === TRUE) {
                        echo '<div class="alert alert-success" role="alert">狀態已更新</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">更新錯誤: ' . $conn->error . '</div>';
                    }
                }

                $sql = "SELECT * FROM verify";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {  
                        $vid = $row["vid"];
                        $v_land = $row["v_land"];
                        $v_prove = $row["v_prove"];
                        $v_address = $row["v_address"];
                        $account = $row["account"];
                        $status = $row["status"];
						echo "<tr>";
                        echo "<td>{$row['vid']}</td>";
                        echo "<td><a href='#' onclick='showImage(\"{$row['v_land']}\")'>查看照片</a></td>";
                        echo "<td><a href='#' onclick='showImage(\"{$row['v_prove']}\")'>查看照片</a></td>";
                        echo "<td>{$row['v_address']}</td>";
                        echo "<td>{$row['account']}</td>";
                        echo "<td>{$row['status']}</td>";
                        echo "<td>";
                        echo "<form id='approve_form_$vid' method='post'>";
                        echo "<input type='hidden' name='vid' value='$vid'>";
                        echo "<button type='button' class='btn btn-success' onclick='confirmApprove(\"$vid\")'><i class='fas fa-check'></i> 批准</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";



						
                    }
                } else {
                    echo "<tr><td colspan='4' class='center-text'>0 结果</td></tr>";
                }
                $conn->close();
            ?>
        </tbody>
    </table>
</div>

<div class="credits">
    <span><i class="fa"></i></span>
</div>

<script>
    //datatable中文化
    $(document).ready(function() {
        $('#myTable').DataTable({
            "language": {
                "processing": "處理中...",
                "loadingRecords": "載入中...",
                "paginate": {
                    "first": "第一頁",
                    "previous": "上一頁",
                    "next": "下一頁",
                    "last": "最後一頁"
                },
                "emptyTable": "目前沒有資料",
                "info": "顯示 _START_ 到 _END_ 筆資料，共 _TOTAL_ 筆",
                "infoEmpty": "顯示 0 到 0 筆資料，共 0 筆",
                "infoFiltered": "(從 _MAX_ 筆資料過濾)",
                "lengthMenu": "顯示 _MENU_ 筆資料",
                "search": "搜尋:",
                "zeroRecords": "沒有符合搜尋的結果",
                "aria": {
                    "sortAscending": ": 升冪排列",
                    "sortDescending": ": 降冪排列"
                },
                "datetime": {
                    "previous": "上一頁",
                    "next": "下一頁",
                    "hours": "時",
                    "minutes": "分",
                    "seconds": "秒",
                    "amPm": [
                        "上午",
                        "下午"
                    ],
                    "unknown": "未知",
                    "weekdays": [
                        "週日",
                        "週一",
                        "週二",
                        "週三",
                        "週四",
                        "週五",
                        "週六"
                    ],
                    "months": [
                        "一月",
                        "二月",
                        "三月",
                        "四月",
                        "五月",
                        "六月",
                        "七月",
                        "八月",
                        "九月",
                        "十月",
                        "十一月",
                        "十二月"
                    ]
                },
                "searchBuilder": {
                    "add": "新增條件",
                    "condition": "條件",
                    "button": {
                        "_": "複合查詢 (%d)",
                        "0": "複合查詢"
                    },
                    "clearAll": "清空",
                    "conditions": {
                        "array": {
                            "contains": "含有",
                            "equals": "等於",
                            "empty": "空值",
                            "not": "不等於",
                            "notEmpty": "非空值",
                            "without": "不含"
                        },
                        "date": {
                            "after": "大於",
                            "before": "小於",
                            "between": "在其中",
                            "empty": "為空",
                            "equals": "等於",
                            "not": "不為",
                            "notBetween": "不在其中",
                            "notEmpty": "不為空"
                        },
                        "number": {
                            "between": "在其中",
                            "empty": "為空",
                            "equals": "等於",
                            "gt": "大於",
                            "gte": "大於等於",
                            "lt": "小於",
                            "lte": "小於等於",
                            "not": "不為",
                            "notBetween": "不在其中",
                            "notEmpty": "不為空"
                        },
                        "string": {
                            "contains": "含有",
                            "empty": "為空",
                            "endsWith": "字尾為",
                            "equals": "等於",
                            "not": "不為",
                            "notEmpty": "不為空",
                            "startsWith": "字首為",
                            "notContains": "不含",
                            "notStartsWith": "開頭不是",
                            "notEndsWith": "結尾不是"
                        }
                    },
                    "data": "欄位",
                    "leftTitle": "群組條件",
                    "logicAnd": "且",
                    "logicOr": "或",
                    "rightTitle": "取消群組",
                    "title": {
                        "_": "複合查詢 (%d)",
                        "0": "複合查詢"
                    },
                    "value": "內容",
                    "deleteTitle": "刪除篩選條件"
                },
                "editor": {
                    "close": "關閉",
                    "create": {
                        "button": "新增",
                        "title": "新增資料",
                        "submit": "送出新增"
                    },
                    "edit": {
                        "button": "修改",
                        "title": "修改資料",
                        "submit": "送出修改"
                    },
                    "remove": {
                        "button": "刪除",
                        "title": "刪除資料",
                        "submit": "送出刪除",
                        "confirm": {
                            "_": "您確定要刪除您所選取的 %d 筆資料嗎？",
                            "1": "您確定要刪除您所選取的 1 筆資料嗎？"
                        }
                    },
                    "multi": {
                        "title": "多重值",
                        "info": "您此欄位所選取的所有條件必須相同，否則將會設定為相同。",
                        "restore": "復原",
                        "noMulti": "此輸入欄需單一資料，不容多選。"
                    },
                    "error": {
                        "system": "系統發生錯誤(更多資訊)"
                    }
                },
                "autoFill": {
                    "cancel": "取消"
                },
                "buttons": {
                    "copySuccess": {
                        "_": "複製了 %d 筆資料",
                        "1": "複製了 1 筆資料"
                    },
                    "collection": "集合",
                    "colvis": "欄位顯示",
                    "colvisRestore": "重置欄位顯示",
                    "copy": "複製",
                    "copyKeys": "按下 ctrl 或 u2318 + C 來複製表格資料到系統剪貼簿。<br \/><br \/>若您想取消，請點選此訊息或按下 ESC 鍵。",
                    "copyTitle": "已經複製到剪貼簿",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "顯示所有筆數",
                        "_": "顯示 %d 筆"
                    },
                    "pdf": "PDF",
                    "print": "列印"
                },
                "searchPanes": {
                    "clearMessage": "清空",
                    "collapse": {
                        "_": "搜尋面版 (%d)",
                        "0": "搜尋面版"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "沒搜尋面版",
                    "loadMessage": "載入中...",
                    "title": "過濾條件 - %d"
                },
                "stateRestore": {
                    "creationModal": {
                        "button": "建立",
                        "columns": {
                            "search": "欄位搜尋",
                            "visible": "欄位顯示"
                        },
                        "name": "名稱：",
                        "order": "排序",
                        "paging": "分頁",
                        "scroller": "卷軸位置",
                        "search": "搜尋",
                        "searchBuilder": "複合查詢",
                        "select": "選擇",
                        "title": "建立新狀態",
                        "toggleLabel": "包含："
                    },
                    "duplicateError": "此狀態名稱已經存在。",
                    "emptyError": "名稱不能空白。",
                    "emptyStates": "名稱不可空白",
                    "removeConfirm": "確定移除 %s 嗎？",
                    "removeError": "移除狀態失敗",
                    "removeJoiner": "及",
                    "removeSubmit": "移除",
                    "renameButton": "重新命名",
                    "renameLabel": "%s 的新名稱："
                },
                "searchPlaceholder": "輸入關鍵字"
            }
        });
    });
    //顯示圖片
function showImage(filename) {
    //圖片路徑
    var imagePath = filename; 

    var img = document.createElement('img');
    img.src = imagePath;
    img.style.maxWidth = '100%';

    img.onerror = function() {
        alert("無法顯示圖片，請檢查路徑和文件名是否正確：" + imagePath);
    };

    // 浮動顯示
    var modal = document.createElement('div');
    modal.style.position = 'fixed';
    modal.style.top = '0';
    modal.style.left = '0';
    modal.style.width = '100%';
    modal.style.height = '100%';
    modal.style.backgroundColor = 'rgba(0,0,0,0.5)'; // 半透明背景
    modal.style.zIndex = '9999';
    modal.style.display = 'flex';
    modal.style.alignItems = 'center';
    modal.style.justifyContent = 'center';

    modal.onclick = function() {
        document.body.removeChild(modal); 
    };

    modal.appendChild(img);

    document.body.appendChild(modal);
}



    function confirmApprove(house) {
        if (confirm("確定要批准這個房屋嗎？")) {
            document.getElementById('approve_form_' + house).submit();
        }
    }
</script>

</body>
</html>
