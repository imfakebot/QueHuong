import { DataTypes } from "sequelize";
export default function initCategoryModel(sequelize) {
    const Category = sequelize.define('Location', {
        CategoryID  : {
            type: DataTypes.UUID,
            defaultValue: DataTypes.UUIDV4,
            primaryKey: true,
        },
        Name:{
            type: DataTypes.STRING,
            allowNull: false,
            unique: true,
        },
        Slug :{
            type: DataTypes.STRING,
            allowNull: false,
            unique: true,
        },
        Description:{   
            type: DataTypes.LONGTEXT,
            allowNull: true,
        },
    }, {
        tableName: 'category',
    });
    return Category;
}