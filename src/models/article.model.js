import { binary } from "joi";
import { DataTypes } from "sequelize";
export default function initArticleModel(sequelize) {
    const Article = sequelize.define('Location', {
        articleId: {
            type: DataTypes.UUID,
            defaultValue: DataTypes.UUIDV4,
            primaryKey: true,
        },
        title:{
            type: DataTypes.TEXT,
            allowNull: true
        },
        slug :{
            type: DataTypes.TEXT,
            allowNull: true,
        },
        execerpt:{   
            type: DataTypes.TEXT,
            allowNull: true,
        },
        content:{   
            type: DataTypes.TEXT,
            allowNull: true,
        },
        coverImageUrl:{
            type: DataTypes.TEXT,
            allowNull: true,
        },
        categoryId: {
            type: DataTypes.UUID,
            allowNull: false,
            primaryKey: true,
        },
        creatAt :{  
            type: DataTypes.DATE,
            allowNull: false,
        },
        binaryID:{
            type: DataTypes.UUID,
            allowNull: false,
            primaryKey: true,
        },
    }, {
        tableName: 'articles',
    });
    return Article;
}