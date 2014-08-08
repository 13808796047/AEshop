    $(function() {

        $('form').validate({
            catname: {
                rule: {
                    required: true,
                    maxlen: 10
                    
                },
                error: {
                    required: " 分类名称不能为空 ",
                    maxlen: " 不能大于10 个字符 "
                    
                },
                message: " 分类名称长度 1 到 10 位 ",
                success: " 分类名称正确 "
            },
            sort: {
                rule: {
                    required: true,
                    num: "1,100"
                    
                },
                error: {
                    num: " 排序不能大于100 ",
                    required: " 排序不能为空 "
                },
                message: " 排序长度 1 到 100 的数字 ",
                success: " 排序填写正确 "
            },
            name: {
                rule: {
                    required: true,
                    maxlen: 10
                    
                },
                error: {
                    required: " 分类名称不能为空 ",
                    maxlen: " 不能大于10 个字符 "
                    
                },
                message: " 分类名称长度 1 到 10 位 ",
                success: " 分类名称正确 "
            } 
        })
    })