import { DataTypes } from "sequelize";
export default function initLocationModel(sequelize) {
    const Location = sequelize.define('Location', {
        locationID: {
            type: DataTypes.UUID,
            defaultValue: DataTypes.UUIDV4,
            primaryKey: true,
        },
        name:{
            type: DataTypes.STRING,
            allowNull: false,
            unique: true,
        },
        slug :{
            type: DataTypes.STRING,
            allowNull: false,
            unique: true,
        },
        content:{   
            type: DataTypes.LONGTEXT,
            allowNull: true,
        },
        imageUrl:{
            type: DataTypes.STRING,
            allowNull: true,
        },
    }, {
        tableName: 'locations',
    });
    return Location;
}
        