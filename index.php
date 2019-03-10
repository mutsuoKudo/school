<!doctype html>
<html lang="ja" ng-app="app">
    <head>
        <meta charset="utf-8">
        <title>名簿</title>
    </head>
    <body ng-controller="MainCtrl">
        <table border="1">
            <tr><th>ID</th><th>名前</th><th>年齢</th><th>コメント</th></tr>
            <tr ng-controller="DetailCtrl" ng-repeat="student in students">
                <td>{{student.id}}</td>
                <td><input ng-model="student.name"></td>
                <td><input ng-model="student.age"></td>
                <td><input ng-model="student.comment"></td>
                <td><button ng-click="update()">更新</button></td>
                <td><button ng-click="delete()">削除</button></td>
            </tr>
            <tr>
                <td><input ng-model="new_student.newid"></td>
                <td><input ng-model="new_student.name"></td>
                <td><input ng-model="new_student.age"></td>
                <td><input ng-model="new_student.comment"></td>
                <td><button ng-click="add()">追加</button></td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-resource.min.js"></script>
        <script src="controller.js"></script>
    </body>
</html>