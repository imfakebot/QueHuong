import { DataTypes } from "sequelize";
import sequelize from "../config/database.config.js"; // Import instance sequelize

const Booking = sequelize.define("Booking", {
    id: {
        type: DataTypes.UUID,
        defaultValue: DataTypes.UUIDV4,
        primaryKey: true,
    },  
    userId: {
        type: DataTypes.UUID,
        allowNull: false,       
    },
    numberOfGuests: {
        type: DataTypes.INTEGER,
        allowNull: false,
        unsigned: true,
    },  
    totalAmount: {
        type: DataTypes.FLOAT,
        allowNull: false,
    },
    status: {
        type: DataTypes.ENUM('pending', 'confirmed', 'cancelled', 'completed'),
        defaultValue: 'pending',
        allowNull: false,
    },
    BookingDate: {
        type: DataTypes.DATE,
        defaultValue: 'Current_timestamp',
        allowNull: false,
    },
    tourScheduleId: {   
        type: DataTypes.UUID,
        allowNull: false,
    }
}, 
{
    timestamps: true,
    tableName: "bookings", // Tên bảng trong DB (tùy chọn, Sequelize sẽ tự động pluralize nếu không có)
});

Booking.belongsTo(User,{
    foreignKey:userId,
    as: Booking
})
export default Booking;
